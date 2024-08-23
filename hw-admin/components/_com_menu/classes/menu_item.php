<?php

class menu_item
{
    static $table =  __prefixe_db__ . "menu_items";
    static $table2 =  __prefixe_db__ . "details_menu_items";
    private $id;
    private $id_menu;
    private $parent_id;
    private $type;
    private $id_item;
    private $blank;
    private $ordre;
    private $titre;
    private $lien;
    private $langue;
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

    public function getIdMenu()
    {
        return $this->id_menu;
    }

    public function getItemParent()
    {
        return $this->parent_id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getIdItem()
    {
        return $this->id_item;
    }

    public function isBlank()
    {
        return $this->blank == 1 ? true : false;
    }

    public function getOrdre()
    {
        return $this->ordre;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getLien()
    {
        return $this->lien;
    }

    public function getLangue()
    {
        return $this->langue;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;
    }

    public function setItemParent($id_parent)
    {
        $this->parent_id = $id_parent;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setIdItem($id_item)
    {
        $this->id_item = $id_item;
    }
    public function setBlank($blank)
    {
        $this->blank = $blank;
    }

    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setLien($lien)
    {
        $this->lien = $lien;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    public function getLink()
    {
        global $db;
        $link = "#0";
        if ($this->type == 'ext') {
            $link = $this->lien;
        } else {
            $classe = $this->type;
            $p = $classe::find($this->id_item, $this->langue);
            $link = $p->getLink();
        }
        return $link;
    }

    public function add()
    {
        global $db;
        $SQLinsert = sprintf(
            "INSERT INTO " . static::$table . " (id_menu, parent_id, type, id_item, blank, ordre) VALUES (%s, %s, %s, %s, %s, %s)",
            GetSQLValueString($this->getIdMenu(), "int"),
            GetSQLValueString($this->getItemParent(), "int"),
            GetSQLValueString($this->getType(), "text"),
            GetSQLValueString($this->getIdItem(), "int"),
            GetSQLValueString($this->isBlank() ? 1 : 0, "int"),
            GetSQLValueString($this->getOrdre(), "int")
        );
        if (!$db->query($SQLinsert)) {
            $id_element = $db->last_id();
            $SQLinsert = sprintf(
                "INSERT INTO " . static::$table2 . " (id_menu_item, titre, lien, langue) VALUES (%s, %s, %s, %s)",
                GetSQLValueString($id_element, "int"),
				GetSQLValueString($this->getTitre(), "text"),
                GetSQLValueString($this->getLien(), "text"),
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
            "UPDATE " . static::$table . " SET parent_id=%s, type=%s, id_item=%s, blank=%s, ordre=%s WHERE id=%s",

            GetSQLValueString($this->getItemParent(), "int"),
            GetSQLValueString($this->getType(), "text"),
            GetSQLValueString($this->getIdItem(), "int"),
            GetSQLValueString($this->isBlank() ? 1 : 0, "int"),
            GetSQLValueString($this->getOrdre(), "int"),
            GetSQLValueString($this->getId(), "int")
        );

        if (!$db->query($SQLupdate)) {
            $SQLselect = sprintf("SELECT * FROM " . static::$table2 . " WHERE id = %s AND langue = %s", GetSQLValueString($this->getId(), "int"), GetSQLValueString($this->getLangue(), "text"));
            $result = $db->query($SQLselect);
            // ajout d'une nouvelle traduction
            if ($db->num_rows($result) == 0) {
                $SQLupdate = sprintf(
                    "INSERT INTO " . static::$table2 . " (id_menu_item, titre, lien, langue) VALUES (%s, %s, %s, %s)",
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getLien(), "text"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            } // modification de la table détails
            else {
                $SQLupdate = sprintf(
                    "UPDATE " . static::$table2 . " SET titre=%s, lien=%s WHERE id_menu_item=%s AND langue=%s",
                    GetSQLValueString($this->getTitre(), "text"),
                    GetSQLValueString($this->getLien(), "text"),
                    GetSQLValueString($this->getId(), "int"),
                    GetSQLValueString($this->getLangue(), "text")
                );
            }

            //echo $SQLupdate;
            if (!$db->query($SQLupdate))
                return 1;
            else
                return 2;
        } else
            return 0;
    }


    public function delete()
    {
        global $db;
        $SQLdelete = sprintf("DELETE FROM " . static::$table . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));
        $SQLdelete2 = sprintf("DELETE FROM " . static::$table2 . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));
        if (!$db->query($SQLdelete) && !$db->query($SQLdelete2))
            return 1;
        else
            return 0;
    }

    public static function find($id, $lang = 'fr')
    {
        global $db;
        $menu_item = new menu_item();
        $SQLselect = sprintf(
            $SQLselect = "SELECT A.*, B.* FROM " . static::$table . " A
					  LEFT JOIN " . static::$table2 . " B ON A.id = B.id_menu_item AND B.langue = %s
					  WHERE A.id = %s ",
            GetSQLValueString($lang, "text"),          
            GetSQLValueString($id, "int")
        );
        echo $SQLselect;
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $menu_item = static::build($data);
        }
        return $menu_item;
    }

    public static function findAll($id, $lang = 'fr', $parent_id = 0, $claus = null, $ordre = false)
    {
        global $db;
        $items = array();
        $menu_item = new menu_item();
        $SQLselect = sprintf(
            "SELECT A.*, B.* FROM " . static::$table . " A
					  LEFT JOIN " . static::$table2 . " B ON A.id = B.id_menu_item 
                      WHERE A.id_menu = %s AND A.parent_id = %s AND B.langue = %s",
            GetSQLValueString($id, "int"),
            GetSQLValueString($lang, "text"),
            GetSQLValueString($parent_id, "int")
        );
        if ($claus) {
            $SQLselect .= " AND A.id<>" . $claus;
        }
        if ($ordre) {
            $SQLselect .= " ORDER BY ordre ASC";
        }
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $menu_item = static::build($data);
            array_push($items, $menu_item);
        }
        return $items;
    }


    public static function build($data)
    {

        $menu_item = new menu_item();
        $menu_item->setId($data['ID']);
        $menu_item->setIdMenu($data['id_menu']);
        $menu_item->setItemParent($data['parent_id']);
        $menu_item->setType($data['type']);
        $menu_item->setIdItem($data['id_item']);
        $menu_item->setBlank($data['blank']);
        $menu_item->setOrdre($data['ordre']);
        $menu_item->setTitre($data['titre']);
        $menu_item->setLien($data['lien']);
        $menu_item->setLangue($data['langue']);
        return $menu_item;
    }


    public function hasSousMenu()
    {
        global $db;
        $SQLselect = "SELECT * FROM " . __prefixe_db__ . "menu_items WHERE parent_id = " . $this->id;
        return ($db->num_rows($db->query($SQLselect)) == 0) ? false : true;
    }

    public function getSousMenu()
    {
        global $db;
        $ids = array();
        $SQLselect = "SELECT id FROM " . __prefixe_db__ . "menu_items WHERE parent_id = " . $this->id . " ORDER BY ordre ASC";
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            array_push($ids, $data['id']);
        }
        return $ids;
    }
}
