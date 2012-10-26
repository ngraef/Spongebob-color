<?php
Header("content-type: application/x-javascript");
function returnimages(){
	$dirname="./images/sb";
	$pattern="\.png$";
	//$files = array();
	$i = 0;
	
	if($handle = opendir($dirname)) {
		while(false !== ($file = readdir($handle))){
			if(eregi($pattern, $file)){
				echo 'imgarray['.$i.']="'.$file .'";';
				$i++;
			}
		}
		closedir($handle);
	}
	//return($files);
} 
echo 'var imgarray=new Array();';
returnimages(); 
?>