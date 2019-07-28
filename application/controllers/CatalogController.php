<?php 


class CatalogController
{


	public function actionList()
	{
		$catalogList = array();
		$catalogList = Catalog::getCatalogList();
		
		require_once (ROOT.'/application/views/catalog/index.php');
		return true;
	}

	public function actionItem($id)
	{
		if ($id) 
		{
			$catalogItem = Catalog::getGoodsItemById($id);

			require_once (ROOT.'/application/views/catalog/item.php');
			return true;
		}
	}

	public function actionCategory($category, $page=1)
	{
		$categoryProducts = array();
		$categoryProducts = Catalog::getProductsListByCategory($category, $page);

		$total = Catalog::getTotalProductsInCategory($category);
		$pagination = new Pagination($total, $page, Catalog::SHOW_BY_DEFAULT, $category);



		require_once (ROOT.'/application/views/catalog/category.php');
		return true;
	}



	
}