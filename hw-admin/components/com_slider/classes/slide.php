<?php
class slide
{
    static $table =  __prefixe_db__ . "slides";
    static $table2 =  __prefixe_db__ . "details_slides";

    private $id;
    private $id_slider;
    private $photo;
    private $ordre;
    private $actif;
    private $titre;
    private $description;
    private $url;
    private $langue;

    public function __construct()
    {

        // $SQLselect = "SELECT A.*, B.* FROM " . __prefixe_db__ . "slides A
        // 				  LEFT JOIN " . __prefixe_db__ . "details_slide B ON A.id = B.id_slide AND langue = '$lang'
        // 				  WHERE A.id = $id";
        // $result = $db->query($SQLselect);

        // if ($db->num_rows($result) == 1) {
        //     $data = $db->fetch_assoc($result);

        //     $this->id = $data['id'];
        //     $this->id_slider = $data['id_slider'];
        //     $this->photo = $data['photo'];
        //     $this->ordre = $data['ordre'];
        //     $this->actif = $data['actif'];

        //     $this->titre = $data['titre'];
        //     $this->description = $data['description'];
        //     $this->url = $data['url'];
        //     $this->langue = $data['langue'];
        // } else
        //     $this->id = 0;
    }

    public function __destruct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdSlider()
    {
        return $this->id_slider;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getURL()
    {
        return $this->url;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getOrdre()
    {
        return $this->ordre;
    }

    public function isActif()
    {
        return $this->actif == 1 ? 1 : 0;
    }

    public function getLangue()
    {
        return $this->langue;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdSlider($id_slider)
    {
        $this->id_slider = $id_slider;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setURL($url)
    {
        $this->url = $url;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function setOrdre($ordre)
    {
        $this->ordre  = $ordre;
    }

    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    public function add()
    {
        global $db;
        $SQLinsert = sprintf(
            "INSERT INTO " . static::$table . " (id_slider, photo, ordre, actif) VALUES (%s, %s, %s, %s)",
            GetSQLValueString($this->getIdSlider(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->isActif(), "int")
        );
        if (!$db->query($SQLinsert)) {
            $id_slide = $db->last_id();
            $SQLinsert = sprintf(
                "INSERT INTO " . static::$table2 . " (id, titre, description, url, langue) VALUES (%s, %s, %s, %s, %s)",

                GetSQLValueString($id_slide, "int"),
                GetSQLValueString($this->getTitre(), "text"),
                GetSQLValueString($this->getDescription(), "text"),
                GetSQLValueString($this->getURL(), "text"),
                GetSQLValueString($this->getLangue(), "text")
            );

            if (!$db->query($SQLinsert)) {
                return 1;
            } else
                return 2;
        } else
            return 0;
    }

    public function edit()
    {
        global $db;
        $SQLupdate = sprintf(
            "UPDATE " . static::$table . " SET id_slider=%s, photo=%s, ordre=%s, actif=%s WHERE id=%s ",
            GetSQLValueString($this->getIdSlider(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->isActif(), "int"),
            GetSQLValueString($this->getId(), "int")
        );

        if (!$db->query($SQLupdate)) {
            $SQLselect = sprintf("SELECT * FROM " . static::$table2 . " WHERE id= %s AND langue = %s", GetSQLValueString($this->getId(), "int"), GetSQLValueString($this->getLangue(), "text"));
            $result = $db->query($SQLselect);
            // ajout d'une nouvelle traduction
            if ($db->num_rows($result) == 0) {
                $SQLupdate = sprintf(
                    "INSERT INTO " . static::$table2 . " (id, titre, description, url, langue) VALUES (%s, %s, %s, %s, %s)",

                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getDescription(), "text"),
                    GetSQLValueString($this->getURL(), "text"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            } // modification de la table détails
            else {
                $SQLupdate = sprintf(
                    "UPDATE " . static::$table2 . " SET titre=%s, description=%s, url=%s WHERE id=%s AND langue=%s ",

                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getDescription(), "text"),
                    GetSQLValueString($this->getURL(), "text"),
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            }


            if (!$db->query($SQLupdate)) {

                return 1;
            } else
                return 2;
        } else
            return 0;
    }

    public function delete()
    {
        global $db;
        $SQLdelete = sprintf("DELETE FROM " . static::$table . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));
        $SQLdelete2 = sprintf("DELETE FROM " . static::$table2 . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));
        if (!$db->query($SQLdelete) && !$db->query($SQLdelete2)) {

            return 1;
        } else
            return 0;
    }



    public static function findAll($id_slider = null, $lang = 'fr')
    {
        global $db;
        $items = array();
        $SQLselect = "SELECT A.*, B.* FROM " . static::$table . " A
					  LEFT JOIN " . static::$table2 . " B ON A.id = B.id
					  WHERE langue = '$lang'";

        if ($id_slider) {
            $SQLselect .= " AND id_slider = $id_slider";
        }

        $SQLselect .= " ORDER BY ordre ASC";

        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $slide = static::build($data);
            array_push($items, $slide);
        }

        return $items;
    }

    public static function find($id)
    {
        global $db;
        $slide = new slide();
        $SQLselect = sprintf(
            $SQLselect = "SELECT A.*, B.* FROM " . static::$table . " A
					  LEFT JOIN " . static::$table2 . " B ON A.id = B.id
					  WHERE A.id = %s",
            GetSQLValueString($id, "int")
        );
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $slide = static::build($data);
        }
        return $slide;
    }


    public static function build($data)
    {

        $slide = new slide();
        $slide->setId($data['id']);
        $slide->setIdSlider($data['id_slider']);
        $slide->setPhoto($data['photo']);
        $slide->setOrdre($data['ordre']);
        $slide->setActif($data['actif']);
        $slide->setTitre($data['titre']);
        $slide->setDescription($data['description']);
        $slide->setURL($data['url']);
        $slide->setLangue($data['langue']);
        return $slide;
    }
}
