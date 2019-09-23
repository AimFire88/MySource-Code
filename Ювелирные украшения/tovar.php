<?php
session_start();
?>



<?php if (isset($_GET['logout'])) { // если вызвали переменную "exit"
unset($_SESSION['password']); // Чистим сессию пароля
unset($_SESSION['login']); // Чистим сессию логина
unset($_SESSION['id']); // Чистим сессию id
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
			<!-- Скрипты 
			<script src="http://dota228.tk/js/checkbox.min.js"></script>
			<script src="http://dota228.tk/js/checkbox.js"></script>-->
			<script src="js/jq.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
			<script src="components/dropdown.js"></script>	
	</head>
		<BODY style="background: url(/images/bg.png);"> <br>
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
      <script>$('.ui.dropdown')
  .dropdown()
;</script>

							</div>   <!-- 13 block --> 
							<div class="three wide column">
								<i class="big vk icon"></i>
								<i class="big twitter icon"></i>
								<i class="big facebook icon"></i>
							</div>	<!-- 3 block --> 
						</div>	
					<div class="ui grid"> <!-- Контрейнер логотипом и поиском --> 
						<div class="five wide column"><img src="/images/logo.png"></div>
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
								 <div align="center"><img class="ui small circular image" src="/images/shop.png"></div>
						</div>

			</div>
			

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
				<div class="ui container">
				<div class="ui grid">

					<div class="seven wide column">
					  	<div class="ui segments">
					  <div class="ui segment " style="font-family: 'Ubuntu Light';">
					    <center><p><b>ФОТО ТОВАРА</b></p></center>
					  </div>
					  <div class="ui red segment" style="font-family: 'Ubuntu Light'; font-size: 18px;">
							
							<center> <img class="ui medium bordered image" src="/images/tovar.png"><br>
							Цена: <a class="ui red Medium label">1600 руб</a> </center>
										  </div>
					</div>
				</div>

					<div class="nine wide column">
					  	<div class="five wide column"><div class="ui segments">
					  <div class="ui segment " style="font-family: 'Ubuntu Light';">
					    <center><p><b>ОПИСАНИЕ ТОВАРА</b></p></center>
					  </div>
					  <div class="ui red segment" style="font-family: 'Ubuntu Light';">
						<p> Любое описание товара </p>
										  </div>
					</div> </div>
<br>
					<div class="five wide column"><div class="ui segments">
					  <div class="ui segment " style="font-family: 'Ubuntu Light';">
					    <center><p><b>ОФОРМЛЕНИЕ ЗАКАЗА</b></p></center>
					  </div>
					  <div class="ui green segment" style="font-family: 'Ubuntu Light';">
						<div class="ui form">
							  <div class="fields">
							    <div class="field">
							      <label>Имя</label>
							      <input type="text" placeholder="Имя">
							    </div>
							    <div class="field">
							      <label>Фамилия</label>
							      <input type="text" placeholder="Фамилия">
							    </div>
							    <div class="field">
							      <label>Отчество</label>
							      <input type="text" placeholder="Отчество">
							    </div>
							  </div>
				  <div class="inline fields">
				    <label for="fruit">Укажите способ доставки:</label>
				    <div class="field">
				      <div class="ui radio checkbox">
				        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
				        <label>Почта.России</label>
				      </div>
				    </div>
				    <div class="field">
				      <div class="ui radio checkbox">
				        <input type="radio" name="fruit" tabindex="0" class="hidden">
				        <label>Самолет</label>
				      </div>
				    </div>
				    <div class="field">
				      <div class="ui radio checkbox">
				        <input type="radio" name="fruit" tabindex="0" class="hidden">
				        <label>Поезд</label>
				      </div>
				    </div>
				  </div>

				  <div class="field">
    <center><label>Пожелания к товару</label></center>
    <textarea rows="2"></textarea>
  </div>
<div class="ui green button" style="font-family: 'Ubuntu Light';"><i class="shop icon"></i> Оплата </div>
<div class="ui primary button" style="font-family: 'Ubuntu Light';"><i class="shop icon"></i> Продолжить покупки </div>
				</div>
					</div>							
					</div>
					</div>
<script>$('.ui.radio.checkbox')
  .checkbox()
;</script>
				 </div>



<br> <br>
<!-- Список комментариев -->
<div class="ui container">
					<div class="ui piled segment">
						<div class="ui comments">
					  <div class="ui large comments" style="font-family: 'Ubuntu Light';">
					  <h3 class="ui dividing header">Отзывы </h3>
					  <div class="comment">
					    <div class="content">
					      <a class="author">Иван</a>
					      <div class="metadata">
					        <span class="date">Сегодня в 17:25</span>
					      </div>
					      <div class="text">Отличный магазин, заказываю уже не первый раз! </div>
					      <div class="actions">
					        <a class="reply">Ответить</a>
					      </div>
					    </div>
					  </div>
					  <div class="comment">
					    <div class="content">
					      <a class="author">Ангелина</a>
					      <div class="metadata">
					        <span class="date">Вчера в 12:30</span>
					      </div>
					      <div class="text">
					        <p>Подскажите какие сроки доставки Почтой.Росии?</p>
					      </div>
					      <div class="actions">
					        <a class="reply">Ответить</a>
					      </div>
					    </div>
					    <div class="comments">
					      <div class="comment">
					        <a class="avatar">
					          <img src="/images/oper.jpg" style="width: 63px;height: 63px;">
					        </a>
					        <div class="content" style="margin-left: 4.5em;">
					          <a class="ui green small label" style="margin-left: 8px;">Оператор 3</a>
					          <div class="metadata">
					            <span class="date">Минуту назад</span>
					          </div>
					          <div class="text" style="margin-left: 2px;">Ув.Ангелина доставка таким способом примерно 5-15 дней. :) </div>
					          <div class="actions">
					            <a class="reply">Ответить</a>
					          </div>
					        </div>
					      </div>
<div class="comments">
					      <div class="comment">
					        <a class="avatar">
					          <img src="/images/oper.jpg" style="width: 63px; height: 63px;">
					        </a>
					        <div class="content">
					          <a class="ui red small label" style="margin-left: 5px;">Оператор 1</a>
					          <div class="metadata">
					            <span class="date">5 минут назад</span>
					          </div>
					          <div class="text" style="margin-left: 5px;">Ожидайте посылку течение 5-10 дней.</div>
					          <div class="actions">
					            <a class="reply">Ответить</a>
					          </div>
					        </div>
					      </div>
					    </div>
					    </div>
					  
					  
					  </div>
					  <form class="ui reply form">
					    <div class="field">
					      <textarea></textarea>
					    </div>
					    <div class="ui blue labeled submit icon button"><i class="icon edit"></i> Оставить отзыв </div>
					  </form>
					</div>
</div>
		
</div></div></div>
</div>
<br> <br>
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