<?php
	function zooTemplate($file, $designVar){
		extract($designVar);
		ob_start();
		require $file;
		$content = ob_get_clean();
		return $content;
	}
?>