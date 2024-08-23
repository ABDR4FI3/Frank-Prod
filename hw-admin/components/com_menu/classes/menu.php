<?php

class menu
{
    static $table =  __prefixe_db__ . "menu";
    static $table2 =  __prefixe_db__ . "details_menu";
	
    private $id;
    private $titre;

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

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }



    public function add()
    {
        global $db;
        $SQLinsert = sprintf(
            "INSERT INTO " . static::$table . " (titre) VALUES (%s)",
            GetSQLValueString($this->getTitre(), "text")
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
            "UPDATE " . static::$table . " SET titre = %s WHERE id = %s",
            GetSQLValueString($this->getTitre(), "text"),
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
        $menu = new menu();
        $ids_menu_items = $menu->findAllChildItem();
        $SQLdelete = sprintf("DELETE FROM " . static::$table . "_items WHERE id_menu = %s", GetSQLValueString($this->getId(), "int"));
        $SQLdelete2 = sprintf("DELETE FROM " . static::$table . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));

        $good = true;
        foreach ($ids_menu_items as $id_item) {
            $SQLdelete3 = sprintf("DELETE FROM " . static::$table2 . "_items WHERE id_item = %s", GetSQLValueString($id_item, "int"));
            if (!$db->query($SQLdelete3)) {
                $good = true;
            } else {
                $good = false;
                break;
            }
        }
        if ($good && !$db->query($SQLdelete) && !$db->query($SQLdelete2)) {
            return 1;
        } else
            return 0;
    }

	public function getMenu($lang = 'fr', $deep = 0, $position = 'main')
    {
        global $db, $siteURL;
        $SQLselect = "SELECT A.id FROM " . __prefixe_db__ . "menu_items A
					  JOIN " . __prefixe_db__ . "details_menu_items B ON A.id = B.id_menu_item
					  WHERE id_menu = " . $this->id . " 
					  AND parent_id = 0
					  AND langue = '" . $lang . "' 
					  ORDER BY ordre ASC";
		//echo $SQLselect;
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) > 0) {
            $result = $db->queryS($SQLselect);
            foreach ($result as $data) {
                $mi = menu_item::find($data['id'], $lang);
                $blank = $mi->isBlank() ? 'target="_blank"' : '';
				if($position == 'main'){
					$classLi = ($mi->hasSousMenu()) ? '' : '';
					$classA = ($mi->hasSousMenu()) ? '' : '';
					$attrLi = ($mi->hasSousMenu()) ? '' : '';
					$attrA = ($mi->hasSousMenu()) ? '' : '';
				}elseif($position == 'bottom'){
					$classLi = '';
					$classA = '';
					$attrLi = '';
					$attrA = '';
				}else{
					$classLi = 'list-group-item bg-transparent p-0 ';
					$classA = 'text-muted lh-26 font-weight-500 hover-white';
					$attrLi = '';
					$attrA = '';
				}
				

                if ($mi->getType() == 'page') {
                    $classLi .= (!isset($_GET['task']) && isset($_GET['id']) && $_GET['id'] == $mi->getIdItem()) ? ' active' : '';
                }
                if($mi->getType() == 'ext' && $mi->getLink() == $siteURL && !isset($_GET['id']) && isHome()){
                    $classLi .=  ' active';
                }
                if ($mi->hasSousMenu() && $deep == 0) {
                    $classLi .=  ' dropdown';
                }
                ?>
            <li id="itemNav-<?php echo $mi->getId(); ?>" class="<?php echo $classLi; ?>" <?php echo $attrLi; ?>>
                <a href="<?php echo $mi->getLink(); ?>" <?php echo $blank; ?> class="<?php echo $classA; ?>" <?php echo $attrA; ?> >
					<?php echo $mi->getTitre();
						  if($mi->hasSousMenu()) echo '<span class="caret"></span>'; ?></a>
                <?php
                if ($mi->hasSousMenu() && $deep == 0) {
                    echo '<ul class="sub-menu">';
                    $SQLselect = "SELECT A.id FROM " . __prefixe_db__ . "menu_items A
									  JOIN " . __prefixe_db__ . "details_menu_items B ON A.id = B.id_menu_item
									  WHERE id_menu = " . $this->id . "
									  AND parent_id = " . $mi->getId() . "
									  AND langue = '" . $lang . "' 
									  ORDER BY ordre ASC";
                    $result2 = $db->queryS($SQLselect);
                    foreach ($result2 as $data2) {
                        $classLi = "";
                        $mi = menu_item::find($data2['id'], $lang);
                        $blank = $mi->isBlank() ? 'target="_blank"' : '';

						$classLi .= (isset($_GET['id']) && $_GET['id'] == $mi->getIdItem()) ? ' active' : '';
                        ?>
                    <li class="<?php echo $classLi; ?>">
                        <a href="<?php echo $mi->getLink(); ?>" <?php echo $blank; ?>><?php echo $mi->getTitre(); ?></a>
                        <?php
                        if ($mi->hasSousMenu() && $deep == 0) {
                            echo '<ul>';
                            $SQLselect = "SELECT A.id FROM " . __prefixe_db__ . "menu_items A
												  JOIN " . __prefixe_db__ . "details_menu_items B ON A.id = B.id_menu_item
												  WHERE id_menu = " . $this->id . "
												  AND parent_id = " . $mi->getId() . "
												  AND langue = '" . $lang . "' 
												  ORDER BY ordre ASC";
                            $result3 = $db->queryS($SQLselect);
                            foreach ($result3 as $data3) {
                                $classLi = "";
                                $mi = menu_item::find($data3['id'], $lang);
                                $blank = $mi->isBlank() ? 'target="_blank"' : '';

                                if ($mi->getType() == 'page') {
                                    $classLi .= (isset($_GET['id']) && $_GET['id'] == $mi->getIdItem()) ? 'active' : '';
                                }else{
                                    $classLi .= (isset($_GET['id']) && $_GET['id'] == $mi->getIdItem()) ? 'active' : '';
                                }
                                ?>
                                <li class="<?php echo $classLi; ?>">
                                    <a href="<?php echo $mi->getLink(); ?>" <?php echo $blank; ?>><?php echo $mi->getTitre(); ?></a>
                                </li>
                                <?php
                            }
                            echo '</ul>';
                        }
                        ?>
                        </li>
                        <?php
                    }
                    echo '</ul>';
                }
                ?>
                </li>
                <?php
            }
        }
    }

    public static function menuExist()
    {
        global $db;
        $ids = array();
        $SQLselect = "SELECT id FROM " .  static::$table;
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            array_push($ids, $data['id']);
        }
        return $ids;
    }


    public function findAllItems()
    {
        global $db;
        $ids = array();
        $SQLselect = "SELECT id FROM " .  static::$table  . "_items WHERE parent_id = 0 AND id_menu = " . $this->getId() . " ORDER BY ordre ASC";
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            array_push($ids, $data['id']);
        }
        return $ids;
    }

    public function findAllParentItem()
    {
        global $db;
        $ids = array();
        $SQLselect = "SELECT id FROM " .  static::$table  . "_items WHERE parent_id = 0 ORDER BY ordre ASC";
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            array_push($ids, $data['id']);
        }
        return $ids;
    }

    public function findAllChildItem()
    {
        global $db;
        $ids = array();
        $SQLselect = sprintf("SELECT id FROM " .  static::$table  . "_items WHERE id_menu = %s", GetSQLValueString($this->getId(), "int")) . " ORDER BY ordre ASC";
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            array_push($ids, $data['id']);
        }
        return $ids;
    }


    public static function find($id)
    {
        global $db;
        $menu = new menu();
        $SQLselect = sprintf(
            "SELECT * FROM " . static::$table . " WHERE id = " . $id,
            GetSQLValueString($id, "int")
        );
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $menu = static::build($data);
        }
        return $menu;
    }

    public static function build($data)
    {
        $menu = new menu();
        $menu->setId($data['id']);
        $menu->setTitre($data['titre']);
        return $menu;
    }


    public static function findAll()
    {
        global $db;
        $items = array();
        $menu = new menu();
        $SQLselect = "SELECT * FROM " . static::$table;
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $menu = static::build($data);
            array_push($items, $menu);
        }
        return $items;
    }
}
