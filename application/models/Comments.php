<?php 

class Comments
{
	

	public static function getСommentsList()
	{
		 $db = Db::getConnection();
		 $commentsList = array();

		 $result = $db->query('SELECT * from comments ORDER BY date DESC LIMIT 10');

		 $i = 0;
		 while ($row = $result->fetch()) 
		 {
		 	$commentsList[$i]['id'] = $row['id'];
		 	$commentsList[$i]['name'] = $row['name'];
		 	$commentsList[$i]['date'] = $row['date'];
		 	$commentsList[$i]['text'] = $row['text'];
		 	$i++;

		 }

		 return $commentsList;

	}

	public static function setComment($username, $text)
	{
		$db = Db::getConnection();

		$sql = 'INSERT INTO comments (name, text) '
		 	.'VALUES (:name, :text)';
		$result = $db->prepare($sql);
 		$result->bindParam(':name', $username, PDO::PARAM_STR);
 		$result->bindParam(':text', $text, PDO::PARAM_STR); 	

		return $result->execute();

	}
}