<?php

class categorie
{
    static $table =  __prefixe_db__ . "categorie";
    static $table2 =  __prefixe_db__ . "details_categorie";

    private $id;
    private $active;
    private $ordre;
    private $parent;
    private $photo;
    private $titre;
    private $seo_titre;
    private $seo_description;
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

    public function isActive()
    {
        return $this->active ? 1 : 0;
    }
    // getters
    public function getActive()
    {
        return $this->active;
    }

    public function getOrdre()
    {
        return $this->ordre;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
    public function getParent()
    {
        return $this->parent;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getSeoTitre()
    {
        return $this->seo_titre;
    }

    public function getSeoDescription()
    {
        return $this->seo_description;
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

    // setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setSeoTitre($seo_titre)
    {
        $this->seo_titre = $seo_titre;
    }

    public function setSeoDescription($seo_description)
    {
        $this->seo_description = $seo_description;
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
            "INSERT INTO " . static::$table . " (active, ordre, photo, date_add, parent ,last_edit) VALUES (%s, %s, %s, %s,%s, %s)",
            GetSQLValueString($this->getActive(), "int"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getDateAdd(), "date"),
            GetSQLValueString($this->getParent(), "text"),
            GetSQLValueString($this->getLastEdit(), "date")
        );

       
        if (!$db->query($SQLinsert)) {
            $id_categorie = $db->last_id();
            $SQLinsert2 = sprintf(
                "INSERT INTO " . static::$table2 . " (id_categorie, titre, seo_titre, seo_description, langue) VALUES (%s, %s, %s, %s, %s)",
                GetSQLValueString($id_categorie, "int"),
                GetSQLValueString($this->getTitre(), "text"),
                GetSQLValueString($this->getSeoTitre(), "text"),
                GetSQLValueString($this->getSeoDescription(), "text"),
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
            "UPDATE " . static::$table . " SET  active = %s, ordre = %s, photo = %s,parent = %s, last_edit = %s WHERE id = %s",
            GetSQLValueString($this->getActive(), "int"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getParent('parenr'), "text"),
            GetSQLValueString($this->getLastEdit(), "date"),
            GetSQLValueString($this->getId(), "int")
        );
        if (!$db->query($SQLupdate)) {
            $SQLselect = sprintf(
                "SELECT * FROM " . static::$table2 . " WHERE id_categorie = %s AND langue = %s",
                GetSQLValueString($this->getId(), "int"),
                GetSQLValueString($this->getLangue(), "text")
            );
            $result = $db->query($SQLselect);
            if ($db->num_rows($result) == 0) {
                $SQLupdate = sprintf(
                    "INSERT INTO " . static::$table2 . " (id_categorie, titre, seo_titre, seo_description, langue) VALUES (%s, %s, %s, %s, %s)",
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getSeoTitre(), "text"),
                    GetSQLValueString($this->getSeoDescription(), "text"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            } else {
                $SQLupdate = sprintf(
                    "UPDATE " . static::$table2 . " SET titre = %s, seo_titre = %s, seo_description = %s WHERE id_categorie = %s AND langue = %s",
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getSeoTitre(), "text"),
                    GetSQLValueString($this->getSeoDescription(), "text"),
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
        
        $result= categorie::findParentG(1);

        if (!empty($result)) {
           
            foreach ($result as $value) {
                $SQLdelete = sprintf(
                    "DELETE FROM " . static::$table . " WHERE id = %s",
                    GetSQLValueString($value->getId(), "int")
               ); 
               if ($db->query($SQLdelete)) {
                echo  $SQLdelete  ; 
               }    
                   
            }
        }




        $SQLdelete = sprintf(
            "DELETE FROM " . static::$table . " WHERE id = %s",
            GetSQLValueString($this->getId(), "int")
        );
        $SQLdelete2 = sprintf(
            "DELETE FROM " . static::$table2 . " WHERE id_categorie = %s",
            GetSQLValueString($this->getId(), "int")
        );
        if (!$db->query($SQLdelete) && !$db->query($SQLdelete2)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function enable()
    {
        global $db;
        $SQLupdate = sprintf(
            "UPDATE " . static::$table . " SET active = %s WHERE id = %s",
            GetSQLValueString($this->getActive(), "int"),
            GetSQLValueString($this->getId(), "int")
        );
        if (!$db->query($SQLupdate)) {
            return 1;
        } else {
            return 0;
        }
    }
	
	public function getLink(){
        global $siteURL;
        if ($this->getTitre() != "") {
            if (langue::isLangueDefault($this->getLangue())) {
                return $siteURL . __CLASS__ . "/" . url_rewriting($this->getTitre()) . "/" . $this->getId() . "/";
            } else {
                return $siteURL . $this->getLangue() . "/" . __CLASS__ . "/" . url_rewriting($this->getTitre()) . "/" . $this->getId() . "/";
            }
        } else
            return "index.php?option=com_" . __CLASS__ . "&id=" . $this->getId();
    }
	
	public static function getSeo(){
        $url = "";
        $url .= "RewriteRule ^" . __CLASS__ . "/([a-zA-Z0-9_-]+)/([0-9]+)/$ index.php?option=com_" . __CLASS__ . "&task=showDetails&id=$2 [NC,L]\n";
        $url .= "RewriteRule ^([a-z]+)/" . __CLASS__ . "/([a-zA-Z0-9_-]+)/([0-9]+)/$ index.php?option=com_" . __CLASS__ . "&task=showDetails&l=$1&id=$3 [NC,L]\n";
        return $url;
    }

    public static function find($id, $langue = 'fr')
    {
        global $db;
        $categorie = new categorie();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_categorie AND langue = %s WHERE A.id = %s",
            GetSQLValueString($langue, "text"),
            GetSQLValueString($id, "int")
        );
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $categorie = static::build($data);
        }
        return $categorie;
    }

  
    /**
     * 
     * @param varchar $parent
     * 
     */
    public static function findParentG($parent)
    {
        global $db;
        $items = array();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_categorie WHERE parent = %s",
            GetSQLValueString($parent, "int")
        );
        
      
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $categorie = static::build($data);
            array_push($items, $categorie);
        }
        return $items;
    }



    public static function findAll($langue, $active = false, $ordre = false ,$parent =false)
    {
        global $db;
        $items = array();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_categorie AND langue = %s WHERE 1=1 ",
            GetSQLValueString($langue, "text")
        );
        if ($active) {
            $SQLselect .= " AND active = 1";
        }
        if ($parent) {
            $SQLselect .= " AND parent = 0";
        }
        if ($ordre) {
            $SQLselect .= " ORDER BY ordre ASC";
        }
       
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $categorie = static::build($data);
            array_push($items, $categorie);
        }
        return $items;
    }

    public static function build($data)
    {
        $categorie = new categorie();
        $categorie->setId($data['ID']);
        $categorie->setActive($data['active']);
        $categorie->setOrdre($data['ordre']);
        $categorie->setPhoto($data['photo']);
        $categorie->setParent($data['parent']);
        $categorie->setTitre($data['titre']);
        $categorie->setSeoTitre($data['seo_titre']);
        $categorie->setSeoDescription($data['seo_description']);
        $categorie->setDateAdd($data['date_add']);
        $categorie->setLastEdit($data['last_edit']);
        $categorie->setLangue($data['langue']);
        return $categorie;
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
}
