<?php
  function urlregex($text){ // Run url
		$pattern = '((http.*\.)(.*)(/))';
		$replace = '<a href="$0" target="_blank" title="$0">$0</a><br />';
		
		echo preg_replace($pattern, $replace, $text); // print
	}
  
  function imgregex($text){ // Run image
		$pattern = '((http.*\.)(www?|)(jpg|jpeg|png|svg|gif))';
		$replace = '<a href="$0" target="_blank" title="$0"><img src="$0" class="img-thumbnail" style="width:100px;" alt="$0"></a><br />';
		 
		echo preg_replace($pattern, $replace, $text); 
	}
?>
