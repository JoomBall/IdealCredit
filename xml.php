<?php

		
		$string ='<?xml version="1.0" encoding="utf-8"?>
<reply xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:noNamespaceSchemaLocation="http://developer.kontomatik.com/schema/v1/command_setup.xsd"
status="202 Accepted">
<command id="120750378" state="setup" name="DefaultImportCommand">
  <progress><value>0</value></progress>
  </command>
</reply>';



		$xml 		= new SimpleXMLElement($string);
		$command	= $xml->command;
		$id			= $command->attributes()->id;
		
		echo( $xml->command[0]['state']);
		
		
		echo($id);
		
		
		
		
		
		
	