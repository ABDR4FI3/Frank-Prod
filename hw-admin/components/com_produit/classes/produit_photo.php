<?php

class produit_photo
{
    static $table =  __prefixe_db__ . "produit_photo";
    static $table2 =  __prefixe_db__ . "details_produit_photo";

    private $id;
    private $produit;
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

    public function getProduit()
    {
        return $this->produit;
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

    public function setProduit($produit)
    {
        $this->produit = $produit;
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
            "INSERT INTO " . static::$table . " (id_produit, photo, ordre, date_add, last_edit) VALUES (%s, %s, %s, %s, %s)",
            GetSQLValueString($this->getProduit(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getDateAdd(), "date"),
            GetSQLValueString($this->getLastEdit(), "date")
        );

        if (!$db->query($SQLinsert)) {
            $id_produit_photo = $db->last_id();
            $SQLinsert2 = sprintf(
                "INSERT INTO " . static::$table2 . " (id_produit_photo, titre, langue) VALUES (%s, %s, %s)",
                GetSQLValueString($id_produit_photo, "int"),
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
            "UPDATE " . static::$table . " SET id_produit = %s, photo = %s, ordre = %s, last_edit = %s WHERE id = %s",
            GetSQLValueString($this->produit->getId(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getLastEdit(), "date"),
            GetSQLValueString($this->getId(), "int")
        );

        if (!$db->query($SQLupdate)) {
            $SQLselect = sprintf(
                "SELECT * FROM " . static::$table2 . " WHERE id_produit_photo = %s AND langue = %s",
                GetSQLValueString($this->getId(), "int"),
                GetSQLValueString($this->getLangue(), "text")
            );

            $result = $db->query($SQLselect);
            if ($db->num_rows($result) == 0) {
                $SQLupdate = sprintf(
                    "INSERT INTO " . static::$table2 . " (id_produit_photo, titre, langue) VALUES (%s, %s, %s)",
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            } else {
                $SQLupdate = sprintf(
                    "UPDATE " . static::$table2 . " SET titre = %s WHERE id_produit_photo = %s AND langue = %s",
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
            "DELETE FROM " . static::$table2 . " WHERE id_produit_photo = %s",
            GetSQLValueString($this->id, "int")
        );

        if (!$db->query($SQLdelete) && !$db->query($SQLdelete2)) {
            @unlink("../../../images/produit/" . $this->getPhoto());
            return 1;
        } else {
            return 0;
        }
    }

    public static function find($id, $langue = 'fr')
    {
        global $db;
        $produit_photo = new produit_photo();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_produit_photo AND langue = %s WHERE A.id = %s",
            GetSQLValueString($langue, "text"),
            GetSQLValueString($id, "int")
        );

        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $produit_photo = static::build($data);
        }
        return $produit_photo;
    }

    public static function findAll($id_produit = null, $langue = 'fr')
    {
        global $db;
        $items = array();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_produit_photo AND langue = %s WHERE 1 = 1 AND id_produit = %s ORDER BY ordre ASC",
            GetSQLValueString($langue, "text"),
			GetSQLValueString($id_produit, "int")
        );

        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $produit_photo = static::build($data);
            array_push($items, $produit_photo);
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

    public static function findAllByProduit($lang, $id)
    {
        global $db;
        $items = array();

        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_produit_photo AND langue = %s WHERE id_produit = %s",
            GetSQLValueString($lang, "text"),
            GetSQLValueString($id, "int")
        );

        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $produit_photo = static::build($data);
            array_push($items, $produit_photo);
        }

        return $items;
    }

    public static function build($data)
    {
        $produit_photo = new produit_photo();

        $produit_photo->setId($data['ID']);
        $produit_photo->setProduit(produit::find($data['id_produit'],$data['langue']));
        $produit_photo->setPhoto($data['photo']);
        $produit_photo->setOrdre($data['ordre']);
        $produit_photo->setTitre($data['titre']);
        $produit_photo->setDateAdd($data['date_add']);
        $produit_photo->setLastEdit($data['last_edit']);
        $produit_photo->setLangue($data['langue']);

        return $produit_photo;
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
            $SQLdelete2 = "DELETE FROM " . static::$table2 . " WHERE id_produit_photo in $ids";
            if (!$db->query($SQLdelete) && !$db->query($SQLdelete2)) {
                return 1;
            } else
                return 2;
        } else
            return 0;
    }
}
