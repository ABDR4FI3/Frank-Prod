<?php

class page
{
    static $table =  __prefixe_db__ . "page";
    static $table2 =  __prefixe_db__ . "details_page";
    private $id;
    private $titre_seo;
    private $description_seo;
    private $texte;
    private $titre;
    private $url;
    private $id_galerie;
    private $photo;
    private $active;
    private $type;
    private $externe;
    private $extrait;
    private $langue;

    public function __construct()
    {
        $this->id = 0;
    }

    public function __destruct()
    {
    }

    // getters

    public function getId()
    {
        return $this->id;
    }
    public function getType()
    {

        return utf8_encode($this->type);
    }

    public function getIdGalerie()
    {
        return $this->id_galerie;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function getExtrait()
    {
        return $this->extrait;
    }

    public function getSeoTitre()
    {
        return $this->titre_seo;
    }

    public function getSeoDescription()
    {
        return $this->description_seo;
    }


    public function getTexte()
    {
        return $this->texte;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getURL()
    {
        return $this->url;
    }


    public function getExterne()
    {
        return utf8_encode($this->externe);
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

    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;
    }

    public function setSeoTitre($titre_seo)
    {
        $this->titre_seo = $titre_seo;
    }

    public function setSeoDescription($description_seo)
    {
        $this->description_seo = $description_seo;
    }


    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setURL($url)
    {
        $this->url = $url;
    }

    public function setType($type)
    {

        $this->type = utf8_encode($type);
    }

    public function setExterne($externe)
    {
        $this->externe = utf8_encode($externe);
    }

    public function setIdGalerie($id_galerie)
    {
        $this->id_galerie = $id_galerie;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    public function isActive()
    {
        return $this->active ? 1 : 0;
    }


	public function getLink(){
        global $db, $siteURL;
        $pageName = $this->langue == 'ar' ? str_replace(' ','-',$this->getTitre()) : url_rewriting($this->getTitre());
        if($pageName != ''){
            if(langue::isLangueDefault($this->langue)) {
                return $siteURL . $pageName . '/';
            }else{
                return $siteURL . $this->langue. '/' . $pageName . '/';
            }
        }else
            return 'index.php?option=com_page&id='.$this->id;
    }

    public function getSeo(){
        global $db;
        $url = "";
        $lang = langue::findByCode($this->langue);
        if ($this->getTitre() != '') {
			
			$titre = $lang->getCode() == 'ar' ? str_replace(' ','-',$this->getTitre()) : url_rewriting($this->getTitre());
            
			if ($this->getType() == 'page') {
                if($lang->isDefault()) {
                    $url = "RewriteRule ^" . $titre . "/$ index.php?option=com_page&id=" . $this->getId() . "&l=" . $lang->getCode() . " [L]\r\n";
                }else{
                    $url = "RewriteRule ^". $lang->getCode() ."/". $titre . "/$ index.php?option=com_page&id=" . $this->getId() . "&l=" . $lang->getCode() . " [L]\r\n";
                }
            } else if ($this->getType() == 'lien') {
                if($lang->isDefault()) {
                    $url = "RewriteRule ^" . $titre . "/$ " . $this->getExterne() . "&id=" . $this->getId() . "&l=" . $lang->getCode() . " [L]\r\n";
					$url .= "RewriteRule ^" . $titre . "/([0-9]+)/$ " . $this->getExterne() . "&page=$1&l=" . $lang->getCode() . " [L]\r\n";
                }else{
                    $url = "RewriteRule ^" . $lang->getCode() ."/". $titre . "/$ " . $this->getExterne() . "&id=" . $this->getId() . "&l=" . $lang->getCode() . " [L]\r\n";
					$url .= "RewriteRule ^" . $lang->getCode() ."/". $titre . "/([0-9]+)/$ " . $this->getExterne() . "&page=$1&l=" . $lang->getCode() . " [L]\r\n";
                }
            }
        }
        return $url;
    }

    // ajout
    public function add()
    {
        global $db;
        $SQLinsert = sprintf(
            "INSERT INTO " . static::$table . " (type, id_galerie, photo, active) VALUES (%s, %s, %s, %s)",
            GetSQLValueString($this->getType(), "text"),
            GetSQLValueString($this->getIdGalerie(), "int"),
            GetSQLValueString($this->getPhoto(), "text"),
            GetSQLValueString($this->getActive(), "int")
        );
        if (!$db->query($SQLinsert)) {
            $id_page = $db->last_id();
            $SQLinsert2 = sprintf(
                "INSERT INTO " . static::$table2 . " (id_page, seo_titre, seo_description, titre, url, texte, externe, langue, extrait) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                GetSQLValueString($id_page, "int"),
                GetSQLValueString($this->getSeoTitre(), "text"),
                GetSQLValueString($this->getSeoDescription(), "text"),
                GetSQLValueString($this->getTitre(), "text"),
                GetSQLValueString($this->getURL(), "text"),
                GetSQLValueString($this->getTexte(), "text"),
                GetSQLValueString($this->getExterne(), "text"),
                GetSQLValueString($this->getLangue(), "text"),
                GetSQLValuestring($this->getExtrait(), "text")
            );
            if (!$db->query($SQLinsert2)) {
                return 1;
            }
            return 2;
        } else {
            return 0;
        }
    }

    //mise à jour
    public function edit()
    {
        global $db;
        $SQLupdate = sprintf(
            "UPDATE " . static::$table . " SET type=%s, id_galerie=%s, photo=%s, active=%s WHERE id=%s ",
            GetSQLValueString($this->getType(), "text"),
            GetSQLValueString($this->getIdGalerie(), "int"),
			GetSQLValueString($this->photo, "text"),
            GetSQLValueString($this->getActive(), "int"),
            GetSQLValueString($this->getId(), "int")
        );

        if (!$db->query($SQLupdate)) {
            $SQLselect = sprintf(
                "SELECT * FROM " . static::$table2 . " WHERE id_page = %s AND langue = %s",
                GetSQLValueString($this->getId(), "int"),
                GetSQLValueString($this->getLangue(), "text")
            );
            $result = $db->query($SQLselect);
            if ($db->num_rows($result) == 0) {
                $SQLupdate = sprintf(
                    "INSERT INTO " . static::$table2 . " (id_page, seo_titre, seo_description, titre, url,  texte, externe, langue, extrait) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getSeoTitre(), "text"),
                    GetSQLValueString($this->getSeoDescription(), "text"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getURL(), "text"),
                    GetSQLValueString($this->getTexte(), "text"),
                    GetSQLValueString($this->getExterne(), "text"),
                    GetSQLValueString($this->getLangue(), "text"),
                    GetSQLValuestring($this->getExtrait(), "text")
                );
            } else {
                $SQLupdate = sprintf(
                    "UPDATE " . static::$table2 . " SET seo_titre=%s, seo_description=%s, titre=%s, url=%s, texte=%s, externe=%s , extrait=%s WHERE id_page=%s AND langue=%s",
                    GetSQLValueString($this->getSeoTitre(), "text"),
                    GetSQLValueString($this->getSeoDescription(), "text"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getURL(), "text"),
                    GetSQLValueString($this->getTexte(), "text"),
                    GetSQLValueString($this->getExterne(), "text"),
                    GetSQLValuestring($this->getextrait(), "text"),
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



    // suppression
    public function delete()
    {
        global $db;
        $SQLdelete = sprintf(
            "DELETE FROM " . static::$table . " WHERE id = %s",
            GetSQLValueString($this->getId(), "int")
        );
        $SQLdelete2 = sprintf(
            "DELETE FROM " . static::$table2 . " WHERE id_page = %s",
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

    public static function find($id, $langue)
    {
        global $db;
        $page = new page();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_page AND langue = %s WHERE A.id = %s",
            GetSQLValueString($langue, "text"),
            GetSQLValueString($id, "int")
        );
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $page = static::build($data);
        }
        return $page;
    }

    public static function findAll($langue = 'fr', $active = false, $ordre = false)
    {
        global $db;
        $items = array();
        $SQLselect = sprintf(
            "SELECT A.id as ID, A.*, B.* FROM " . static::$table . " A LEFT JOIN " . static::$table2 . " B ON A.id = B.id_page AND langue = %s",
            GetSQLValueString($langue, "text")
        );
        if ($active) {
            $SQLselect .= " WHERE active = 1";
        }
        if ($ordre) {
            $SQLselect .= " ORDER BY ordre ASC";
        }
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $page = static::build($data);
            array_push($items, $page);
        }

        return $items;
    }

    public static function build($data)
    {
        $page = new page();
        $page->setId($data['ID']);
        $page->setActive($data['active']);
        $page->setType($data['type']);
        $page->setPhoto($data['photo']);
        $page->setTitre($data['titre']);
        $page->setSeoTitre($data['seo_titre']);
        $page->setSeoDescription($data['seo_description']);
        $page->setIdGalerie($data['id_galerie']);
        $page->setUrl($data['url']);
        $page->setTexte($data['texte']);
        $page->setExterne($data['externe']);
        $page->setLangue($data['langue']);
        $page->setExtrait($data['extrait']);
        return $page;
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
