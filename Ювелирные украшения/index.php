<?php
session_start();
?>



<?php if (isset($_GET['logout'])) { // если вызвали переменную "exit"
unset($_SESSION['password']); // Чистим сессию пароля
unset($_SESSION['login']); // Чистим сессию логина
unset($_SESSION['id']); // Чистим сессию id;
} ?>
<html>
	<head>
			<title> Пётр Дмитриев</title>
			<!-- КСС -->
			<!-- <link rel="stylesheet" type="text/css" href="css/semantic.css"> -->
			<link rel="stylesheet" type="text/css" href="css/icon.css">
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/icon.min.css">
			<link rel="stylesheet" type="text/css" href="css/fonts.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.min.css">
			<link rel="stylesheet" type="text/css" href="csss/semantic.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
			<!-- Скрипты -->
			<script src="http://dota228.tk/js/checkbox.min.js"></script>
			<script src="http://dota228.tk/js/checkbox.js"></script>
			<script src="js/jq.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
			<script src="components/dropdown.js"></script>	
	</head>
		<BODY style="background: url(images/bg.png);"> <br>
			<div class="ui container">
						<div class="ui grid" style="background: rgba(175, 173, 173, 0.53); border-radius: 8px; margin: auto;">
							<div class="thirteen wide column">
								<div class="my_font"><div data-type="element" style="background: white;"data-element="button" class="ui large floating dropdown theme button">
        <span class="text" style="font-family: 'Ubuntu Light';">ВАШ ГОРОД</span>
        <i class="dropdown icon"></i>
        <div style="font-family: 'Ubuntu Light';" class="menu ui transition hidden" tabindex="-1">
          <div  class="item">Таганрог</div>
          <div  class="item">Ростов</div>
          <div  class="item">Москва</div>
        </div>
      </div></div>
							</div>   <!-- 13 block --> 
							<div class="three wide column">
								<i class="big vk icon"></i>
								<i class="big twitter icon"></i>
								<i class="big facebook icon"></i>
							</div>	<!-- 3 block --> 
						</div>	
					<div class="ui grid"> <!-- Контрейнер логотипом и поиском --> 
						<div class="five wide column"><img src="images/logo.png"></div>
						<div class="six wide column">
							<div class="ui large label"> 7 (999) 690-13-37 </div>
							<div class="ui large label" style="margin-left: 50px;"> goodaim88@gmail.com </div>
								<div class="ui search">
									  <div class="ui icon input" style="width: 400px; margin-top: 30px;">
									    <input class="prompt" type="text" placeholder="Поиск...">
									    <i class="search icon"></i>
									  </div>
									</div>
						</div>	
						<div class="five wide column">
								 <div align="center"><img class="ui small circular image" src="images/shop.png"></div>
						</div> </div>

		
			

<br>
<div class="ui grid">
<div class="seventeen wide column">
<div class="ui fluid large menu" style="font-family: 'Ubuntu Light';">
						  <a class="item" href="index.php"> ГЛАВНАЯ</a> 
						  <a class="item" href="oplata.php"> ОПЛАТА</a> 
						  <a class="item" href="dostavka.php"> ДОСТАВКА </a>
						  <a class="item" href="contact.php"> О НАС</a> 
  							<div class="right menu">
  							<? if(isset($_SESSION['login'])) {  // если есть логин, показываем кнопку ?>
  							  <div class="ui simple dropdown item"><i class="user icon"></i>Ваш логин <? echo $_SESSION['login']; ?> <i class="dropdown icon"></i> 
  	<div class="menu">
      <div class="item"><i class="percent icon"></i>Личная скидка до: 5% </div>
      <div class="divider"></div>
      <a href="lk.php" class="item"><i class="desktop icon"></i>Личный кабинет</a>
      <a href="dostavka.php"class="item"><i class="setting icon"></i>Помощь</a>
      <div class="divider"></div>
     <a href="?logout" class="item"><i class="power icon"></i>Выход</a>
    </div>
  </div>
  							<? } 
  							 		   else {
           (empty($_SESSION['login'])) // login = 0 => Не  зарегестрированный
           	?><div class="item">
			<a style="color: white;" href="reg.php"><button class="ui green button"> Регистрация </button></div></a> 
						         <div class="item">
  <a style="color: white;" href="login.php"><button style="border-right: 0px solid;" class="ui blue button"> Вход </button></a></div>         <? } ?>
   </div></div></div>
</div>
</div>
</div>

<br> <br>
<!-- Список товаров -->
<div class="ui container">
				<div class="ui grid">
					<div class="four wide column"> <!-- 4 block --> 
						<div class="ui segments">
					  <div class="ui segment " style="font-family: 'Ubuntu Light';">
					    <center><p><b>КАТАЛОГ</b></p></center>
					  </div>
					  <div class="ui red segment" style="font-family: 'Ubuntu Light';">
					  <div class="ui vertical menu" style="box-shadow: 0px 1px 0px 0px rgba(34, 36, 38, 0.22); border: 0px solid rgba(0,0,0,.1); font-family: 'Ubuntu Light';">
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i> КОЛЬЦА <div class="menu">
      <div class="item">Мужские</div>
      <div class="item">Женские</div>
    </div>
  </div>
  <a class="item">КУЛОНЫ </a>
  <div class="divider"></div>
  <a class="item">СЕРЬГИ </a>
  <a class="item">БРАСЛЕТЫ </a>
  <a class="item">ЦЕПИ </a>
</div>
<script>$('.ui.dropdown')
  .dropdown()
;</script>

					  </div>
					</div>
				</div> 
				<div class="twelve wide big column">
					<div class="ui segments">
					  <div class="ui segment " style="font-family: 'Ubuntu Light';">
					    <center><p><b>ПОПУЛЯРНЫЕ ТОВАРЫ</b></p></center></div>
					  <div class="ui red segment" style="font-family: 'Ubuntu Light';">
						  	    <div class="ui grid" style="margin-left: 55px; margin-bottom: 10px;">
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
									  <div class="five wide column">
									  			<img class="ui large bordered image" style="border-radius: 8px 8px 0px 0px; border-bottom: 0px solid rgba(0,0,0,.1); "src="images/tovar.png">
									  			<div class="my_font" style="border: 1px solid rgba(0,0,0,.1); font-size: 16px; border-top: 0px solid rgba(0,0,0,.1);">
									  			<p align="center" style="border-bottom: 1px solid rgba(0,0,0,.1); "> Серьги из серебра "Лазурит"</p>
									  			<p align="center">Цена: <button style="padding: 7px;" class="ui green label">1600р</button> 	</p>
									  			<center><a href="tovar.php"><div class="ui primary button"> <i class="Shopping Bag icon"></i> Подробнее </div></a></center><br>
									  			</div>

									  </div>
								</div>
					  </div>
					</div>
				</div>

		</div>
		
</div>


<!-- FOOTER -->
					<div class="ui black inverted vertical footer segment" style="margin-top: 15px; font-family: 'Ubuntu Light'; ">
					  <div class="ui center aligned container">
					    <div class="ui stackable inverted grid">
					<div class="seven wide left column">
					        <h4 class="ui inverted teal header">РАССКАЗАТЬ ДРУЗЬЯМ</h4>
					        

					<p> <button class="ui facebook button"><i class="facebook icon"></i> Facebook </button> <button class="ui twitter button"><i class="twitter icon"></i> Twitter </button><button class="ui vk button"><i class="vk icon"></i> VK </button>  </p>
					        
					      </div>
					      <div class="three wide column">
					        <h4 class="ui inverted header">КАТАЛОГ</h4>
					        <div class="ui inverted link list">
					          <a target="_blank" style="text-align: justify;" class="item">КОЛЬЦА</a>
					          <a class="item" style="text-align: justify;" target="_blank">КУЛОНЫ</a>
					          <a class="item" style="text-align: justify;" target="_blank">СЕРЬГИ</a>
					          <a class="item" style="text-align: justify;" target="_blank">БРАСЛЕТЫ</a>
					<a class="item" style="text-align: justify;" target="_blank">ЦЕПИ</a>
					        </div>
					      </div>
					      <div class="three wide column">
					        <h4 class="ui inverted header">Меню</h4>
					        <div class="ui inverted link list">
					          <a class="item" style="text-align: justify;" target="_blank">ГЛАВНАЯ</a>
					          <a class="item" style="text-align: justify;" target="_blank">ОПЛАТА</a>
					          <a class="item" style="text-align: justify;">ДОСТАВКА</a>
					          
					<a class="item" style="text-align: justify;">НОВОСТИ</a><a class="item" style="text-align: justify;">КОНТАКТЫ</a>
					        </div>
					      </div>
					   
					      
					    </div>
					    <div class="ui inverted section divider"></div>
					    
					    <div class="ui horizontal inverted small divided link list">
					      <a class="item" href="/" target="_blank">Дмитриев Пётр П-14</a>
					    </div>
					  </div>
					</div>
</html>