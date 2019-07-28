<?php 

class NewsController
{


	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsList();
		
		require_once (ROOT.'/application/views/news/index.php');
		return true;
	}

	public function actionView($id)
	{
		if ($id) 
		{
			$newsItem = News::getNewsItemById($id);

			require_once (ROOT.'/application/views/news/new.php');
			return true;
		}
	}

	
}