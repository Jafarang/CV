<?php
	if(isset($_POST["kooft"]))
	{
		$file=fopen("NumOfFiles.txt","r");
		$num=(int)fread($file,filesize("NumOfFiles.txt"));
		$num++;
		fclose($file);
		
		$file=fopen("NumOfFiles.txt","w");
		fwrite($file,$num);
		fclose($file);
		
		$file=fopen("$num.txt","w");
		fwrite($file,$_POST["name"]."\n".$_POST["email"]."\n".$_POST["message"]."\n");
		fclose($file);
	}
	
	header("Location: page3.php");
	die();
?>