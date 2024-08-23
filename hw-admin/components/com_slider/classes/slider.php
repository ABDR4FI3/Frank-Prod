<?php
class slider
{

    static $table =  __prefixe_db__ . "slider";
    static $table2 =  __prefixe_db__ . "slides";

    private $id;
    private $titre;
    private $actif;

    public function __construct()
    {
        $this->id = 0;
    }

    public function __destruct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function isActif()
    {
        return $this->actif ? 1 : 0;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    public function add()
    {
        global $db;
        $SQLinsert = sprintf(
            "INSERT INTO " . static::$table . " (titre, actif) VALUES (%s, %s)",
            GetSQLValueString($this->getTitre(), "text"),
            GetSQLValueString($this->isActif(), "int")
        );
        if (!$db->query($SQLinsert))
            return 1;
        else
            return 0;
    }

    public function edit()
    {
        global $db;
        $SQLupdate = sprintf(
            "UPDATE " . static::$table . " SET titre = %s, actif = %s WHERE id = %s",
            GetSQLValueString($this->getTitre(), "text"),
            GetSQLValueString($this->isActif(), "int"),
            GetSQLValueString($this->getId(), "int")
        );
        if (!$db->query($SQLupdate))
            return 1;
        else
            return 0;
    }

    public function delete()
    {
        global $db;

        $SQLdelete = sprintf("DELETE FROM " . static::$table . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));


        if (!$db->query($SQLdelete)) {
            $good = true;
            $items = slide::findAll($this->getId());
            if (count($items) > 0) {
                foreach ($items as $item) {
                    $photo = $item->getPhoto();
                    if ($item->delete() == 1) {
                        if (file_exists("../../../images/slides/" . $photo)) {
                            @unlink("../../../images/slides/" . $photo);
                        }
                    } else {
                        $good = false;
                    }
                }
                if ($good) {
                    return 1;
                } else {
                    return 2;
                }
            } else {
                return 1;
            }
        } else
            return 0;
    }

    public static function findAll($actif = null)
    {
        global $db;
        $slider = new slider();
        $items = array();
        $SQLselect = "SELECT * FROM " . static::$table;

        if ($actif) {
            $SQLselect .= " AND actif = 1";
        }

        $SQLselect .= " ORDER BY id ASC";

        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $slider = static::build($data);
            array_push($items, $slider);
        }
        return $items;
    }

    public static function find($id)
    {
        global $db;
        $slider = new slider();
        $SQLselect = sprintf(
            "SELECT * FROM " . static::$table . " WHERE id = %s",
            GetSQLValueString($id, "int")
        );
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $slider = static::build($data);
        }
        return $slider;
    }

    public function getIdChildrenSlide()
    {
        global $db;
        $ids = array();
        $selectSQL = "SELECT id FROM " . __prefixe_db__ . "slides where id_slider = $this->id";
        $result = $db->queryS($selectSQL);
        foreach ($result as $data) {
            array_push($ids, $data['id']);
        }
        return $ids;
    }

    public static function build($data)
    {
        $slider = new slider();

        $slider->setId($data['id']);
        $slider->setTitre($data['titre']);
        $slider->setActif(($data['actif']));

        return $slider;
    }
}
