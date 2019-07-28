<?php 
include_once ROOT. '/application/models/Main.php';

class SiteController
{


	public function actionMain()
	{
		$catalogList = array();
		$catalogList = Main::getCatalogList();
		
		require_once (ROOT.'/application/views/main/index.php');
		return true;
	}

/*	public function actionItem($id)
	{
		if ($id) 
		{
			$catalogItem = Catalog::getGoodsItemById($id);

			require_once (ROOT.'/application/views/catalog/item.php');
			return true;
		}
	}*/

	
}