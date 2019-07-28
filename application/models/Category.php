<?php  
class Category
{
	public static function getCategoryList()
	{
		$db = Db::getConnection();

			$categoryList = array();

			$result = $db->query('SELECT * from category');

			$i = 0;

			while ($row = $result->fetch())
			{
				$categoryList[$i]['url'] = $row['url'];
				$categoryList[$i]['name'] = $row['name'];
				$categoryList[$i]['img'] = $row['img'];
				$i++;
			}

			return $categoryList;	
	}
}
			

