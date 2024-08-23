<?php
/* -------------------------------- installation -------------------------------- */
function install_com_produit()
{    
	$install = new installation();    
	
	$result1 = $install->init()
		->table("produit")
		->column("id_categorie", "INT NULL")
		->column("photo","VARCHAR(250) NULL") 
		->column("active","INT(3) NULL") 
		->column("prix","DOUBLE NULL")
		->column("date_add", "DATETIME NULL")
		->column("last_edit", "DATETIME NULL")
		->create();    
	
	$result2 = $install->init()        
		->table("details_produit")        
		->column("id_produit", "INT NULL")        
		->column("titre", "VARCHAR(250) NULL") 
		->column("description", "TEXT NULL") 
		->column("langue", "VARCHAR(3) NULL")        
		->create();    
	
	$result3 = $install->init()
		->table("produit_photo")
		->column("id_produit","INT NULL") 
		->column("photo","VARCHAR(250) NULL")
		->column("ordre","INT NULL")
		->column("date_add", "DATETIME NULL")
		->column("last_edit", "DATETIME NULL")
		->create();    
	
	$result4 = $install->init()        
		->table("details_produit_photo")        
		->column("id_produit_photo", "INT NULL")        
		->column("titre", "VARCHAR(250) NULL") 
		->column("langue", "VARCHAR(3) NULL")        
		->create();    
	
	$result5 = $install->init()->module("com_produit")->addPermissions();    
	
	if($result1 && $result2 && $result3 && $result4 && $result5)
	{
		$install->init()->file("produit", "images")->fileCreate();
		return 1;    
	}
	else 
		return 0;    
}
/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_produit()
{    
	$desinstall = new installation();    

	$result1 = $desinstall->init()->table("produit")->drop(); 
	$result2 = $desinstall->init()->table("details_produit")->drop();    
	$result3 = $desinstall->init()->table("produit_photo")->drop(); 
	$result4 = $desinstall->init()->table("details_produit_photo")->drop();    
	$result5 = $desinstall->init()->module("com_produit")->revokePermissions(); 

	if($result1 && $result2 && $result3 && $result4 && $result5)
		return 1;    
	else 
		return 0;    
}