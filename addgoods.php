<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
  <link rel="stylesheet" href="astyle.css">
</head>
<body>
  <h1>Добавление товара в базу данных</h1>
  <form method="POST" action="addgoodsscript.php">
  
 <p><span class="labelform">Артикул: </span><input type="text" name="articul"></p>
 <p><span class="labelform">Название: </span><input type="text" name="goodsname"></p>
 <p><span class="labelform">Описание: </span><textarea name="description"></textarea></p>
 <p><span class="labelform">Вес: </span><input type="text" name="weight"></p>
 <p><span class="labelform">Стоимость: </span><input type="text" name="cost"></p>
 <p><span class="labelform">Акционная цена: </span><input type="text" name="salecost"></p>
 <p><span class="labelform">Количество: </span><input type="text" name="amount"></p>
 <p><span class="labelform">Фото: </span><input type="text" name="img"></p>
 <p><span class="labelform">Категория: </span>
	<br><label><input type="checkbox" value="1" name="catpowder">Порошки</label>
	<br><label><input type="checkbox" value="1" name="catshampoo">Шампуни</label>
	<br><label><input type="checkbox" value="1" name="catbaby">Детская химия</label>
 
 </p>
 <input type="submit">
 
 
 
 
 
  </form>
</body>
</html>
