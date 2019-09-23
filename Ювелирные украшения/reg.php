<html>
	<head>
			<title> Пётр Дмитриев</title>
			<!-- КСС -->
			<!-- <link rel="stylesheet" type="text/css" href="css/semantic.css"> -->
			<link rel="stylesheet" type="text/css" href="css/icon.css">
			<link rel="stylesheet" type="text/css" href="css/icon.min.css">
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/fonts.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.min.css">
			<link rel="stylesheet" type="text/css" href="http://elitobuv.tk/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
			<!-- Скрипты -->
			<script src="http://dota228.tk/js/checkbox.min.js"></script>
			<script src="http://dota228.tk/js/checkbox.js"></script>
			<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
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
  							<div class="right menu"> <div class="item">
  							<button class="ui green button"><a style="color: white;" href="reg.php"> Регистрация </a> </button></div>
						         <div class="item">
  <button style="border-right: 0px solid;" class="ui blue button"><a style="color: white;" href="login.php"> Вход </a></button></div> </div></div></div>
</div>
</div>

<br> <br>
<!-- Список товаров -->
<div class="ui container">
				<div class="ui raised segment" style="font-family: 'Ubuntu Light';">
<center>
<div class="ui attached message">
  <div class="header">Страница регистрации! </div>
  <p>Создайте новый аккаунт</p>
</div>
<form action="reg.php" method="POST" class="ui form attached fluid segment">
  <div class="field">
    <label>Ваш логин</label>
     <input type="text" style="width: 25%;" placeholder="Логин" name="login">
  </div>
  <div class="field">
    <label>Ваш пароль</label>
    <input type="password" style="width: 25%;" placeholder="Пароль" name="password">
  </div>
  <button type="submit" class="ui blue submit button" style="width: 25%;" name="rega">Зарегистрироваться </button> </center> <br>

</form>
<?php $connection = mysqli_connect('localhost', 'u620028_obsh', 'aviklove', 'u620028_obsh') or die(mysqli_error()); // Соединение с базой данных ?> 

<?php if (isset($_POST['rega'])) // Отлавливаем нажатие на кнопку отправить 
{
if (empty($_POST['login']))  // Условие - если поле логин пустое
{
echo '<center><div class="ui red large label">Вы не заполнили логин</div></center>'; // Выводим сообщение об ошибке
}          
elseif (empty($_POST['password'])) // Иначе если поле с паролем пустое
{
echo '<center><div class="ui red large label">Вы не заполнили пароль</div></center>'; // Выводим сообщение об ошибке
}                      
else // Иначе если поля не пустые
{
$login = $_POST['login']; 
$imy = $_POST['imy'];//Присваеваем переменной значение из поля с логином             
$password = $_POST['password']; // Присваеваем другой переменной значение из поля с паролем
$query = "INSERT INTO `petr` (login, password) VALUES ('$login', '$password')"; // Создаем переменную с запросом к базе данных на отправку нового юзера
$result = mysqli_query($connection, $query) or die(mysql_error()); // Отправляем переменную с запросом в базу данных 
echo '<div class="ui bottom attached warning message"><center><span class="label label-success">Регистрация прошла успешно, войдите в свою учетную запись!</span></center></div>','<script type="text/javascript">setTimeout(function(){location.replace("login.php");}, 1000);</script>';
}
} ?>
 

</div>
		
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