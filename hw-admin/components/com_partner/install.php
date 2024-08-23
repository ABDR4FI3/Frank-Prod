<?php
/* -------------------------------- installation -------------------------------- */
function install_com_partner()
{    
	$install = new installation();    
	
	$result1 = $install->init()
		->table("partner")             
		->column("photo","VARCHAR(250) NULL")        
		->column("active","INT(3) NULL")        
		->column("date_add", "DATE NULL")        
		->column("last_edit", "DATE NULL")        
		->create();    
	
	$result2 = $install->init()        
		->table("details_partner")        
		->column("id_partner","INT NULL")        
		->column("titre", "VARCHAR(250) NULL")        
		->column("extrait", "text NULL")        
		->column("texte", "text NULL")        
		->column("langue", "VARCHAR(3) NULL")        
		->create(); 
		
	$result3 = $install->init()->module("com_partner")->addPermissions();    
	
	if($result1 && $result2 && $result3)
	{        
		$install->init()->file("partner", "images")->fileCreate();        
		return 1;    
	} 
	else 
	{        
		return 0;    
	}
}
/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_partner()
{    
	$desinstall = new installation();    
	$result1 = $desinstall->init()->table("partner")->drop();    
	$result2 = $desinstall->init()->table("details_partner")->drop();    
	
	$result3 = $desinstall->init()->module("com_partner")->revokePermissions();    
	if($result1 && $result2 && $result3)
	{        
		$desinstall->init()->file("partner", "images")->fileRemove();        
		return 1;    
	} 
	else 
	{        
		return 0;    
	}
}