<?php
/* -------------------------------- installation -------------------------------- */
function install_com_blog()
{    
	$install = new installation();    
	
	$result1 = $install->init()
		->table("blog")             
		->column("id_categorie", "INT NULL")        
		->column("photo","VARCHAR(250) NULL")        
		->column("photo_banniere","VARCHAR(250) NULL")
		->column("active","INT(3) NULL")        
		->column("date_add", "DATE NULL")        
		->column("last_edit", "DATE NULL")        
		->create();    
	
	$result2 = $install->init()        
		->table("details_blog")        
		->column("id_blog","INT NULL")        
		->column("titre", "VARCHAR(250) NULL")        
		->column("sous_titre", "VARCHAR(250) NULL")        
		->column("extrait", "text NULL")        
		->column("texte", "text NULL")        
		->column("seo_titre","VARCHAR(200) NULL")        
		->column("seo_description", "VARCHAR(300) NULL")        
		->column("langue", "VARCHAR(3) NULL")        
		->create(); 
	
	$result3 = $install        ->init()        
		->table("categorie_blog")        
		->column("photo","VARCHAR(250) NULL")        
		->column("active","INT(3) NULL")        
		->column("ordre","INT NULL")        
		->column("date_add", "DATE NULL")        
		->column("last_edit", "DATE NULL")        
		->create();    
	
	$result4 = $install        ->init()        
		->table("details_categorie_blog")        
		->column("id_categorie","INT NULL")        
		->column("seo_titre","VARCHAR(200) NULL")        
		->column("seo_description", "VARCHAR(300) NULL")        
		->column("titre", "VARCHAR(250) NULL")        
		->column("langue", "VARCHAR(3) NULL")        
		->create();
	
	$result5 = $install->init()->module("com_blog")->addPermissions();    
	
	if($result1 && $result2 && $result3 && $result4 && $result5)
	{        
		$install->init()->file("blog", "images")->fileCreate();        
		return 1;    
	} 
	else 
	{        
		return 0;    
	}
}
/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_blog()
{    
	$desinstall = new installation();    
	$result1 = $desinstall->init()->table("blog")->drop();    
	$result2 = $desinstall->init()->table("details_blog")->drop();    
	$result3 = $desinstall->init()->table("categorie_blog")->drop();    
	$result4 = $desinstall->init()->table("details_categorie_blog")->drop();
	
	$result5 = $desinstall->init()->module("com_blog")->revokePermissions();    
	if($result1 && $result2 && $result3 && $result4 && $result5)
	{        
		$desinstall->init()->file("blog", "images")->fileRemove();        
		return 1;    
	} 
	else 
	{        
		return 0;    
	}
}