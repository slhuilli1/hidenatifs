 <?php
	defined('_JEXEC') or die('Access deny');
	
	class plgContentHideNatifs extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){	
			//echo "TOTOT";
			$re = '/(data-natif\s*?=\s*?".*")/mU';
			
			$article->text = preg_replace($re, "", $article->text);

		}	
	}
?>