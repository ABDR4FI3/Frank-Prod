<?php

class galerie_photo
{
    static $table =  __prefixe_db__ . "galerie_photo";
    static $table2 =  __prefixe_db__ . "details_galerie_photo";

    private $id;
    private $galerie;
    private $photo;
    private $ordre;
    private $titre;
    private $date_add;
    private $last_edit;
    private $langue;

    public function __construct()
    {
        $this->id = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getGalerie()
    {
        return $this->galerie;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getOrdre()
    {
        return $this->ordre;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDateAdd()
    {
        return $this->date_add;
    }

    public function getLastEdit()
    {
        return $this->last_edit;
    }

    public function getLangue()
    {
        return $this->langue;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setGalerie($galerie)
    {
        $this->galerie = $galerie;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;
    }

    public function setLastEdit($last_edit)
    {
        $this->last_edit = $last_edit;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    public function add()
    {
        global $db;

        $SQLinsert = sprintf(
            "INSERT INTO " . static::$table . " (id_galerie, photo, ordre, date_add, last_edit) VALUES (%s, %s, %s, %s, %s)",
            GetSQLValueString($this->getGalerie(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getDateAdd(), "date"),
            GetSQLValueString($this->getLastEdit(), "date")
        );

        if (!$db->query($SQLinsert)) {
            $id_galerie_photo = $db->last_id();
            $SQLinsert2 = sprintf(
                "INSERT INTO " . static::$table2 . " (id_galerie_photo, titre, langue) VALUES (%s, %s, %s)",
                GetSQLValueString($id_galerie_photo, "int"),
                GetSQLValueString($this->getTitre(), "text"),
                GetSQLValueString($this->getLangue(), "text")
            );

            if (!$db->query($SQLinsert2)) {
                return 1;
            }
            return 2;
        } else {
            return 0;
        }
    }

    public function edit()
    {
        global $db;
        $SQLupdate = sprintf(
            "UPDATE " . static::$table . " SET id_galerie = %s, photo = %s, ordre = %s, last_edit = %s WHERE id = %s",
            GetSQLValueString($this->getGalerie(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getLastEdit(), "date"),
            GetSQLValueString($this->getId(), "int")
        );

        if (!$db->query($SQLupdate)) {
            $SQLselect = sprintf(
                "SELECT * FROM " . static::$table2 . " WHERE id_galerie_photo = %s AND langue = %s",
                GetSQLValueString($this->getId(), "int"),
                GetSQLValueString($this->getLangue(), "text")
            );

            $result = $db->query($SQLselect);
            if ($db->num_rows($result) == 0) {
                $SQLupdate = sprintf(
                    "INSERT INTO " . static::$table2 . " (id_galerie_photo, titre, langue) VALUES (%s, %s, %s)",
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            } else {
                $SQLupdate = sprintf(
                    "UPDATE " . static::$table2 . " SET titre = %s WHERE id_galerie_photo = %s AND langue = %s",
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            }

            if (!$db->query($SQLupdate)) {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 0;
        }
    }

    public function delete()
    {
        global $db;

        $SQLdelete = sprintf(
            "DELETE FROM " . static::$table . " WHERE id = %s",
            GetSQLValueString($this->id, "int")
        );

        $SQLdelete2 = sprintf(
            "DELETE FROM " . static::$table2 . " WHERE id_galerie_photo = %s",
            GetSQLValueString($this->id, "int")
        );

        if (!$db->query($SQLdelete) && !$db->query($SQLdelete2)) {
            @unlink("../../../images/galerie/" . $this->getPhoto());
            return 1;
        } else {
            return 0;
        }
    }

    public static function find($id, $langue = 'fr')
    {
        global $db;
        $galerie_photo = new galerie_photo();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_galerie_photo AND langue = %s WHERE A.id = %s",
            GetSQLValueString($langue, "text"),
            GetSQLValueString($id, "int")
        );

        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $galerie_photo = static::build($data);
        }
        return $galerie_photo;
    }

    public static function findAll($id_galerie = null, $langue = 'fr')
    {
        global $db;
        $items = array();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_galerie_photo AND langue = %s WHERE 1 = 1 AND id_galerie = %s ORDER BY ordre ASC",
            GetSQLValueString($langue, "text"),
			GetSQLValueString($id_galerie, "int")
        );

        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $galerie_photo = static::build($data);
            array_push($items, $galerie_photo);
        }
        return $items;
    }

    public static function findPhotosName($data)
    {
        global $db;
        $photos = [];
        if (isset($data['ids']) && !empty($data['ids'])) {
            $SQLselect = sprintf(
                "SELECT photo FROM " . static::$table . " WHERE id in%s",
                GetSQLValueString($data['ids'], "text")
            );

            $result = $db->queryS($SQLselect);

            foreach ($result as $data) {
                $photos[] = $data["photo"];
            }
            return $photos;
        }
    }

    public static function findAllByGalerie($lang, $id)
    {
        global $db;
        $items = array();

        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_galerie_photo AND langue = %s WHERE id_galerie = %s",
            GetSQLValueString($lang, "text"),
            GetSQLValueString($id, "int")
        );

        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $galerie_photo = static::build($data);
            array_push($items, $galerie_photo);
        }

        return $items;
    }

    public static function build($data)
    {
        $galerie_photo = new galerie_photo();

        $galerie_photo->setId($data['ID']);
        $galerie_photo->setGalerie($data['id_galerie']);
        $galerie_photo->setPhoto($data['photo']);
        $galerie_photo->setOrdre($data['ordre']);
        $galerie_photo->setTitre($data['titre']);
        $galerie_photo->setDateAdd($data['date_add']);
        $galerie_photo->setLastEdit($data['last_edit']);
        $galerie_photo->setLangue($data['langue']);

        return $galerie_photo;
    }

    public static function getLastId()
    {
        global $db;
        return $db->last_id();
    }

    public static function count()
    {
        global $db;
        $SQLcount = "SELECT count(id) as c FROM " . static::$table;
        $result = $db->query($SQLcount);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            return $data["c"];
        }
        return 0;
    }

    public static function deleteMultiple($data)
    {

        global $db;
        if (isset($data['ids']) && !empty($data['ids'])) {
            extract($data);
            $SQLdelete = "DELETE FROM " . static::$table . " WHERE id in $ids";
            $SQLdelete2 = "DELETE FROM " . static::$table2 . " WHERE id_galerie_photo in $ids";
            if (!$db->query($SQLdelete) && !$db->query($SQLdelete2)) {
                return 1;
            } else
                return 2;
        } else
            return 0;
    }
}
