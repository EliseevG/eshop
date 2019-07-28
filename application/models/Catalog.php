<?php  
class Catalog
{
	const SHOW_BY_DEFAULT = 16;

	public static function getGoodsItemById($id)
	{
		$id = intval($id);

		if ($id) {
			
			$db = Db::getConnection();

			$result = $db->query("SELECT * from goods WHERE id =".$id);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$catalogItem = $result->fetch();

			return $catalogItem;
		}
	}

	public static function getProductsListByCategory($category = false, $page = 1)
	{

		if ($category) {

			$page = intval($page);
			$offset = ($page -1) * self::SHOW_BY_DEFAULT;

			
			$db = Db::getConnection();

			$products = array();

			$result = $db->query("SELECT * from goods WHERE activ = '1' AND categor ='".$category
				."' ORDER BY id ASC "
				."LIMIT ".self::SHOW_BY_DEFAULT
				." OFFSET ".$offset);

			$i = 0;

			while ($row = $result->fetch()) {
				$products[$i]['id'] = $row['id'];
				$products[$i]['name'] = $row['name'];
				$products[$i]['description'] = $row['description'];
				$products[$i]['img'] = $row['img'];
				$products[$i]['cost'] = $row['cost'];
				$products[$i]['weight'] = $row['weight'];
				$products[$i]['gem'] = $row['gem'];
				$products[$i]['material'] = $row['material'];
				$products[$i]['razmer'] = $row['razmer'];
				$i++;
			}

			return $products;
		}
	}


	public static function getCatalogList()
	{
		 $db = Db::getConnection();
		 $catalogList = array();

		 $result = $db->query("SELECT * from goods WHERE activ ='1'  ");

		 $i = 0;
		 while ($row = $result->fetch()) 
		 {
		 	$catalogList[$i]['id'] = $row['id'];
		 	$catalogList[$i]['name'] = $row['name'];
		 	$catalogList[$i]['cost'] = $row['cost'];
		 	$catalogList[$i]['description'] = $row['description'];
		 	$catalogList[$i]['img'] = $row['img'];
		 	$i++;

		 }

		 return $catalogList;

	}

	public static function getTotalProductsInCategory($category)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        
        // Используется подготовленный запрос
        $result = $db->query("SELECT count(id) AS count FROM goods WHERE activ ='1' AND  categor ='".$category."'");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }


    public static function getGoodsItemByIdsArray($idsArray)
	{
		$products = array();

		$db = Db::getConnection();

		$idsString = implode(',', $idsArray);

		$result = $db->query("SELECT * from goods WHERE id IN ($idsString)");

		$result->setFetchMode(PDO::FETCH_ASSOC);

		$i = 0;
		while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['cost_gold'] = $row['cost_gold'];
			$products[$i]['img'] = $row['img'];
			$products[$i]['cost'] = $row['cost'];
			$products[$i]['description'] = $row['description'];
			$i++;
		}

		return $products;
		
	}

	public static function getGoodsWithSale()
	{
		$salegoods = array();

		$db = Db::getConnection();

		$result = $db->query("SELECT * from goods WHERE discount='y' ");

		$result->setFetchMode(PDO::FETCH_ASSOC);

		$i = 0;
		while ($row = $result->fetch()) {
			$salegoods[$i]['id'] = $row['id'];
			$salegoods[$i]['name'] = $row['name'];
			$salegoods[$i]['cost_gold'] = $row['cost_gold'];
			$salegoods[$i]['img'] = $row['img'];
			$salegoods[$i]['cost_silver'] = $row['cost_silver'];
			$salegoods[$i]['description'] = $row['description'];
			$i++;
		}

		return $salegoods;
	}




}