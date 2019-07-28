<?php  
class Main
{
	public static function getGoodsItemById($id)
	{
		$id = intval($id);

		if ($id) {
			
			$db = Db::getConnection();

			$result = $db->query('SELECT * from goods WHERE id ='.$id);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$catalogItem = $result->fetch();

			return $catalogItem;
		}
	}

	public static function getCatalogList()
	{
		 $db = Db::getConnection();
		 $catalogList = array();

		 $result = $db->query('SELECT * from goods');

		 $i = 0;
		 while ($row = $result->fetch()) 
		 {
		 	$catalogList[$i]['id'] = $row['id'];
		 	$catalogList[$i]['name'] = $row['name'];
		 	$catalogList[$i]['cost'] = $row['cost'];
		 	$catalogList[$i]['discription'] = $row['discription'];
		 	$catalogList[$i]['img'] = $row['img'];
		 	$i++;

		 }

		 return $catalogList;

	}

	/*public static function getCategoriesList()
	{
		 $db = Db::getConnection();
		 $categoriesList = array();

		 $result = $db->query('SELECT * from category');

		 $i = 0;
		 while ($row = $result->fetch()) 
		 {
		 	$categoriesList[$i]['id'] = $row['id'];
		 	$categoriesList[$i]['name'] = $row['name'];
		 	$i++;

		 }

		 return $categoriesList;

	}*/
}