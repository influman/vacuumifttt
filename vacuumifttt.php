<?php
   $xml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>";      
   //***********************************************************************************************************************
   // V1.0 : Contrôle iRobot Roomba via Webhooks IFTTT
   
	// recuperation des infos depuis la requete
    $value = getArg("value");
	$key = getArg("key");
	$periph_id = getArg('eedomus_controller_module_id'); 
		
	if ($value != "" && $key != "plugin.parameters.IFTTT_KEY") {
		if ($value == 99) {
			die;
		}
		$url = "http://maker.ifttt.com/trigger/".$value."/with/key/".$key;
		httpQuery($url,'GET'); 	
		die;
	}
	die;
?> 
