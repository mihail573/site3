<?php

// Подключаемся к бд
function dbConnect($host, $user, $password, $databasename) {
	if (mysql_connect($host, $user, $password)) {
		echo '<br>Успешно соединились';
		mysql_select_db($databasename) or die ('База данных не подключена');
		mysql_set_charset('utf8');
	}
	else {
		die('нет соединения с базой данных');
	}
}

//добавляем товар в базу данных
function addToDb($dbtable, $articul,$goodsname,$description,$weight,$cost,$salecost,$amount,$img, $catpowder,$catshampoo,$catbaby) {
	$sql="INSERT INTO $dbtable (articul, goodsname, description, weight, cost, salecost, amount, img, catpowder,catshampoo,catbaby) VALUE ($articul,$goodsname,$description,$weight,$cost,$salecost,$amount,$img, $catpowder,$catshampoo,$catbaby)";
	if(mysql_query($sql)===TRUE){
		echo 'Запись добавлена';
	}
	else {
		echo 'Ошибка добавления записи';
	}
}

//выгрузка в csv файл
function toCSV($dbtable) {
	$fh=fopen('price.csv', 'w');
	$sql="SELECT * FROM $dbtable";
	$res=mysql_query($sql);
	if ($res) {
		while ($row= mysql_fetch_array($res)) {
			fwrite ($fh,$row['articul'].",");
			fwrite ($fh,$row['goodsname'].",");
			fwrite ($fh, $row['cost']."\n");
		}
		echo '<a href="price.csv">Скачать прайс</a>';
	}
		fclose ($fh);
	
}


?>
