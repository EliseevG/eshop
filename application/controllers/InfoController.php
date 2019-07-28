<?php 
class InfoController
{




	public function actionAboutus()
	{
		
		require_once (ROOT.'/application/views/aboutus/index.php');
		return true;
	}

	public function actionDelivery()
	{
		
		require_once (ROOT.'/application/views/delivery/index.php');
		return true;
	}



	public function actionGuarantees()
	{
		
		require_once (ROOT.'/application/views/guarantees/index.php');
		return true;
	}



	public function actionDiscounts()
	{
		$salegoods = array();
		$salegoods=Catalog::getGoodsWithSale();
		require_once (ROOT.'/application/views/discounts/index.php');
		return true;
	}

	public function actionOrder()
	{
		
		require_once (ROOT.'/application/views/order/index.php');
		return true;
	}

	public function actionMain()
	{
		
		require_once (ROOT.'/application/views/main/index.php');
		return true;
	}

	


	
} ?>