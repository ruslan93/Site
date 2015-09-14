<?php
  $gotit = 0;
  require('sys_sendmail.php');
  if(isset($_POST['name'])&&isset($_POST['button'])&&isset($_POST['phone'])&&isset($_POST['other'])) {
   send_mime_mail('Заказ', // имя отправителя
"this@this.ru", // email отправителя
"Заказчик", // имя получателя
"roadsteer@mail.ru", // email получателя
"UTF-8", // кодировка переданных данных
"UTF-8", // кодировка письма
"ЗАКАЗ", // тема письма
"Имя: ".$_POST['name']."\nПочта: ".$_POST['phone']."\nФорма: ".$_POST['other']."\nЦвет: ".$_POST['color']."\nКоличество: ".$_POST['quality']// текст письма
);
    $gotit=1;
  }
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
    <script  src="carousel.js" type ="text/javascript"></script> 
    <link rel="stylesheet" type="text/css" href="css/styles-carousel.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="carousel.js"></script>  
    <link rel="stylesheet" href="nivo-zoom.css" type="text/css" media="screen" />
	  <script src="jquery.nivo.zoom.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/styles-carousel.css"> 
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/countdown/jquery.countdown.css" />

    <script type="text/javascript" src="js/libs/modernizr-2.6.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script src="jquery.maskedinput.min.js"></script>  
    <script type="text/javascript" src="main.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />  
</head>
<body>
<script src="assets/countdown/jquery.countdown.js"></script>
<script src="assets/js/script.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('body').nivoZoom({
		speed:1000, // Скорость увеличения
		zoomHoverOpacity:0.8, // прозрачность увеличенного фото
		overlay:true, // наложение отсутствует
		overlayColor:'#333', // цвет наложения на картинку
		overlayOpacity:0.5, // прозрачность наложения
		captionOpacity:0.8 // Прозрачность подписи
	});
});
</script>
<script type="text/javascript">
function swapImageSpectrum_1() {
        change_spectrum.src = "images/kresla1/spectrum.jpg";
}
function swapImageSpectrum_2() {
        change_spectrum.src = "images/kresla1/spectrum2.jpg";
}
function swapImageSpectrum_3() {
        change_spectrum.src = "images/kresla1/spectrum3.jpg";
}
function swapImageSpectrum_4() {
        change_spectrum.src = "images/kresla1/spectrum4.jpg";
}
function swapImageNeo1_1() {
        change_neo1.src = "images/kresla1/neo1.jpg";
}
function swapImageNeo1_2() {
        change_neo1.src = "images/kresla1/neo1_2.jpg";
}
function swapImageNeo1_3() {
        change_neo1.src = "images/kresla1/neo1_3.jpg";
}
function swapImageNeo1_4() {
        change_neo1.src = "images/kresla1/neo1_4.jpg";
}
function swapImageNeo1_5() {
        change_neo1.src = "images/kresla1/neo1_5.jpg";
}
function swapImageNeo1_6() {
        change_neo1.src = "images/kresla1/neo1_6.jpg";
}

function swapImageNeo2_1() {
        change_neo2.src = "images/kresla1/neo2.jpg";
}
function swapImageNeo2_2() {
        change_neo2.src = "images/kresla1/neo2_2.jpg";
}
function swapImageNeo2_3() {
        change_neo2.src = "images/kresla1/neo2_3.jpg";
}
function swapImageNeo2_4() {
        change_neo2.src = "images/kresla1/neo2_4.jpg";
}

function swapImageLeader_1() {
        change_leader.src = "images/kresla1/leader.jpg";
}
function swapImageLeader_2() {
        change_leader.src = "images/kresla1/leader2.jpg";
}
function swapImageLeader_3() {
        change_leader.src = "images/kresla1/leader3.jpg";
}
function swapImageLeader_4() {
        change_leader.src = "images/kresla1/leader4.jpg";
}

function swapImageDevon_1() {
        change_devon.src = "images/kresla1/devon.jpg";
}
function swapImageDevon_2() {
        change_devon.src = "images/kresla1/devon2.jpg";
}

function swapImageArzonia_1() {
        change_arzonia.src = "images/kresla1/arzonia.jpg";
}
function swapImageArzonia_2() {
        change_arzonia.src = "images/kresla1/arzonia2.jpg";
}

function swapImageDavos_1() {
        change_davos.src = "images/kresla1/davos.jpg";
}
function swapImageDavos_2() {
        change_davos.src = "images/kresla1/davos2.jpg";
}
function swapImageDavos_3() {
        change_davos.src = "images/kresla1/davos3.jpg";
}
function swapImageDavos_4() {
        change_davos.src = "images/kresla1/davos4.jpg";
}

</script>

  <?php if($gotit) { ?>
  <div id="blackit"></div>
  <script>alert('Спасибо. Мы свяжемся с Вами в ближайшее время');$('#blackit').hide();</script>
  <?php } ?>

    <div id="content">
      
       

      

      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="sertificat1"></a>  
    <div class="popup-zvonokt">      
      
          <img src="images/sertificat1.png" alt="">
         
      </div>       
    </div> 

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="sertificat2"></a>  
    <div class="popup-zvonokt">      
      
          <img src="images/sertificat2.png" alt="">
         
      </div>       
    </div> 



        <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="sertificat3"></a>  
    <div class="popup-zvonokt">      
      
          <img src="images/sertificat3.png" alt="">
         
      </div>       
    </div> 

        <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="sertificat4"></a>  
    <div class="popup-zvonokt">      
      
          <img src="images/sertificat4.png" alt="">
         
      </div>       
    </div> 

        <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="sertificat5"></a>  
    <div class="popup-zvonokt">      
      
          <img src="images/sertificat5.png" alt="">
         
      </div>       
    </div> 

        <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="sertificat6"></a>  
    <div class="popup-zvonokt">      
      
          <img src="images/sertificat6.png" alt="">
         
      </div>       
    </div> 


      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="wind-zakaz-top"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="Заказ звонка">
            <input class="adress" type="hidden" name="color" value="">
            <input class="adress" type="hidden" name="quality" value="">
            
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Оставить заявку">
        </form>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_impreza"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Impreza">
            <input class="adress" type="hidden" name="color" value="">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_davos"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="davos">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Davos">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <p>Цвет:</p>
            <select  name="color">
    <option value="бордовый">бордовый</option>
    <option selected value="черный">черный</option>
    <option value="коричневый">коричневый</option>
    <option value="бежевый">бежевый</option>
   </select></p>
            <input type="hidden"  name="model" class="model" value="davos">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_devon"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="devon">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="s_text nameinp sinp copy-form" type="hidden" name="other" value="Заказ звонка">
            <p>Цвет:</p>
            <select  name="color">
    <option selected value="черный">черный</option>
    <option value="бежевый">бежевый</option>
   </select>

 <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="model" class="model" value="Devon">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 


    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_leader"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="leader">
        <form class="s_form" action="index.php" method="POST">
           <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Leader">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <p>Цвет:</p>
            <select  name="color">
    <option selected value="черный">черный</option>
    <option value="бордовый">бордовый</option>
    <option value="синий">синий</option>
    <option value="серый">серый</option>
   </select></p>
           <input type="hidden"  name="model" class="model" value="davos">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_neo1"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="neo1">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Neo1">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <p>Цвет:</p>
            <select  name="color">
    <option selected value="коричнево-бежевый">коричнево-бежевый</option>
    <option value="черно-желтый">черно-желтый</option>
    <option value="черно-синий">черно-синий</option>
    <option value="черно-красный">черно-красный</option>
    <option value="черно-бордовый">черно-бордовый</option>
    <option value="черный">черный</option>
   </select></p>
            <input type="hidden"  name="model" class="model" value="Neo1">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 


    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_neo2"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="neo2">
        <form class="s_form" action="index.php" method="POST">
           <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Neo2">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <p>Цвет:</p>
            <select   name="color">
    <option value="черно-желтый">черно-желтый</option>
    <option value="черно-синий">черно-синий</option>
    <option value="черно-красный">черно-красный</option>
    <option selected value="черный">черный</option>
   </select></p>
            <input type="hidden"  name="model" class="model" value="Neo2">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 


    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_spectrum"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="spectrum">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Spectrum">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <p>Цвет:</p>
            <select  name="color">
    <option value="оранжевый">оранжевый</option>
    <option value="серый">серый</option>
    <option value="серо-синий">серо-синий</option>
    <option selected value="черный">черный</option>
   </select></p>
            <input type="hidden"  name="model" class="model" value="Spectrum">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_arzonia"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="arzonia">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Arzonia">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <p>Цвет:</p>
            <select  name="color">
    <option value="бежевый">бежевый</option>
    <option selected value="черный">черный</option>
   </select></p>
            <input type="hidden"  name="model" class="model" value="Arzonia">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 


    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_teramo"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Teramo">
            <input class="adress" type="hidden" name="color" value="">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

 <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_arezzo"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Arezzo">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>


 <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_767"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели 767">
            <input class="adress" type="hidden" name="color" value="">
            <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_neo3"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                 <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Neo3">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 


 <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_902"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели 902">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_compact"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                   <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Compact">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_888"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                     <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели 888">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_bergamo"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                       <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Begramo">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>

      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_inter"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                        <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Inter">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>

      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_brindisi"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                       <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Brindisi">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_turin"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                        <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Turin">
            <input class="adress" type="hidden" name="color" value="">
         <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_747"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                       <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели 747">
            <input class="adress" type="hidden" name="color" value="">
          <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>



      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_buro"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Buro">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">        </form>
      </div>       
    </div>

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_parma"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                        <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Parma">
            <input class="adress" type="hidden" name="color" value="">
           <p>Количество:</p>
   <select  name="quality">
    <option selected value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>

      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="zakaz_polo"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top4">
        <form class="s_form" action="index.php" method="POST">
                        <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="заказ модели Polo">
            <input class="adress" type="hidden" name="color" value="">
            <input class="s_text nameinp sinp copy-form" type="text" name="quality" maxlength="3" placeholder="Количество...*">
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Заказать">
        </form>
      </div>       
    </div>




    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_impreza"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/impreza.jpg" alt=""></div>
          <div class="details2"><p>Кресло Impreza</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">20 540 руб.</h3>
                <div class="image">
                    <img src="images/kresla1/impreza_color.png">
                    <a class="order-buttnn21" href="#zakaz_impreza">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

  

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_teramo"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/teramo.jpg" alt=""></div>
          <div class="details2"><p>Кресло Teramo</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">16 290 руб.</h3>
                <div class="image">
                  <img src="images/kresla1/teramo_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_teramo">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 



     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_arezzo"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/arezzo.jpg" alt=""></div>
          <div class="details2"><p>Кресло Arzonia</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">14 940 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/arezzo_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_arezzo">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 



        <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_767"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/767.jpg" alt=""></div>
          <div class="details2"><p>Кресло 767</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">5 190 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/767_color.png" alt="">
                    <a class="order-buttnn21" href="#zakaz_767">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 



     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_neo3"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/neo3.jpg" alt=""></div>
          <div class="details2"><p>Кресло Neo3</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">5 440 руб.</h3>
                <div class="image">
                  <img src="images/kresla1/neo3_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_neo3">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

 <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_902"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/902.jpg" alt=""></div>
          <div class="details2"><p>Кресло 902</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">5 900 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/902_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_902">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_compact"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/compact.jpg" alt=""></div>
          <div class="details2"><p>Кресло Compact</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">6 470 руб.</h3>
                <div class="image">
                 <img src="images/kresla1/compact_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_compact">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_888"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/888.jpg" alt=""></div>
          <div class="details2"><p>Кресло 888</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">5 090 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/888_color.png" alt="">
                    <a class="order-buttnn21" href="#zakaz_888">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 



     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_bergamo"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/bergamo.jpg" alt=""></div>
          <div class="details2"><p>Кресло Bergamo</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">7 280 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/bergamo_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_bergamo">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

 <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_arzonia"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_arzonia" name="change_arzonia" src="images/kresla1/arzonia2.jpg" alt=""></div>
          <div class="details2"><p>Кресло Arzonia</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">12 790 руб.</h3>
                  <div class="image_devon">
                 <img src="images/kresla1/arzonia_color.png" alt="" onclick="swapImageArzonia_1();">
                 <img src="images/kresla1/arzonia_color2.png" alt="" onclick="swapImageArzonia_2();">
                </div>
                <a class="order-buttnn20" href="#zakaz_arzonia">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_inter"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/inter.jpg" alt=""></div>
          <div class="details2"><p>Кресло Inter</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">6 920 руб.</h3>
                <div class="image">
                  <img src="images/kresla1/compact_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_inter">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

 <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_brindisi"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/brindisi.jpg" alt=""></div>
          <div class="details2"><p>Кресло Brindisi</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">7 290 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/brindisi_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_brindisi">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_turin"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/turin.jpg" alt=""></div>
          <div class="details2"><p>Кресло Turin</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">11 890 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/turin_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_turin">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_747"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/747.jpg" alt=""></div>
          <div class="details2"><p>Кресло 747</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">3 490 руб.</h3>
                <div class="image">
                   <img src="images/kresla1/747_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_747">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_buro"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/buro.jpg" alt=""></div>
          <div class="details2"><p>Кресло Buro</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">4 390 руб.</h3>
                <div class="image">
                  <img src="images/kresla1/buro_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_buro">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 


     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_davos"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_davos" name="change_davos" src="images/kresla1/davos.jpg" alt=""></div>
          <div class="details2"><p>Кресло Davos</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">4 590 руб.</h3>
           <div class="image_neo2">
                 <img src="images/kresla1/davos_color.jpg" alt="" onclick="swapImageDavos_1();">
                 <img src="images/kresla1/davos_color2.jpg" alt="" onclick="swapImageDavos_2();">
                 <img src="images/kresla1/davos_color3.png" alt="" onclick="swapImageDavos_3();">
                 <img src="images/kresla1/davos_color4.png" alt=""onclick="swapImageDavos_4();">
                
                </div>
                <a class="order-buttnn20" href="#zakaz_davos">Заказать</a>
              </div>
          </div>
      </div>       
    </div> 

  




    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_leader"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_leader" name="change_leader" src="images/kresla1/leader4.jpg" alt=""></div>
          <div class="details2"><p>Кресло Leader</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">3 290 руб.</h3>
                <div class="image_neo2">
                 <img src="images/kresla1/leader_color.png" alt="" onclick="swapImageLeader_1();">
                 <img src="images/kresla1/leader_color2.png" alt="" onclick="swapImageLeader_2();">
                 <img src="images/kresla1/leader_color3.png" alt="" onclick="swapImageLeader_3();">
                 <img src="images/kresla1/leader_color4.png" alt=""onclick="swapImageLeader_4();">
                
                </div>
                <a class="order-buttnn20" href="#zakaz_neo1">Заказать</a>
              </div>
          </div>
      </div>       
    </div> 

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_devon"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_devon" name="change_devon"  src="images/kresla1/devon.jpg" alt=""></div>
          <div class="details2"><p>Кресло Devon</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">4 370 руб.</h3>
            <div class="image_devon">
                 <img src="images/kresla1/devon_color.png" alt="" onclick="swapImageDevon_1();">
                 <img src="images/kresla1/devon_color2.png" alt="" onclick="swapImageDevon_2();">
                </div>
                <a class="order-buttnn20" href="#zakaz_devon">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

    

    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_neo2"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_neo2" name="change_neo2" src="images/kresla1/neo2.jpg" alt=""></div>
          <div class="details2"><p>Кресло Neo2</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">4 890 руб.</h3>
                 <div class="image_neo2">
                 <img src="images/kresla1/neo1_color.png" alt="" onclick="swapImageNeo2_1();">
                 <img src="images/kresla1/neo1_color2.png" alt="" onclick="swapImageNeo2_2();">
                 <img src="images/kresla1/neo1_color3.png" alt="" onclick="swapImageNeo2_3();">
                 <img src="images/kresla1/neo1_color4.png" alt=""onclick="swapImageNeo2_4();">
                
                </div>
                <a class="order-buttnn20" href="#zakaz_neo1">Заказать</a>
              </div>            
          </div>
      </div>       
    </div> 

   



    <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_neo1"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_neo1" name="change_neo1" src="images/kresla1/neo1.jpg" alt=""></div>
          <div class="details2"><p>Кресло Neo1</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">4 870 руб.</h3>
                <div class="image_neo1">
                 <img src="images/kresla1/neo1_color.png" alt="" onclick="swapImageNeo1_1();">
                 <img src="images/kresla1/neo1_color2.png" alt="" onclick="swapImageNeo1_2();">
                 <img src="images/kresla1/neo1_color3.png" alt="" onclick="swapImageNeo1_3();">
                 <img src="images/kresla1/neo1_color4.png" alt=""onclick="swapImageNeo1_4();">
                 <img src="images/kresla1/neo1_color5.png" alt="" onclick="swapImageNeo1_5();">
                 <img src="images/kresla1/neo1_color6.png" alt=""onclick="swapImageNeo1_6();">
                </div>
                <a class="order-buttnn21" href="#zakaz_neo1">Заказать</a>
              </div>
          </div>
      </div>       
    </div> 

     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_parma"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/parma.jpg" alt=""></div>
          <div class="details2"><p>Кресло Parma</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">3 690 руб.</h3>
                <div class="image">
                 <img src="images/kresla1/parma_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_parma">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 

      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_polo"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img src="images/kresla1/polo.jpg" alt=""></div>
          <div class="details2"><p>Кресло Polo</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">4 790 руб.</h3>
                <div class="image">
                 <img src="images/kresla1/polo_color.png" alt="">
                   <a class="order-buttnn21" href="#zakaz_polo">Заказать</a>
                </div>
              </div>
          </div>
      </div>       
    </div> 


     <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="details_spectrum"></a>  
    <div class="popup-zvonokt">      
      <a class="close2" title="Закрыть" href="#close"></a>
      <div class="details">
          <div class="details1"><img id="change_spectrum" name="change_spectrum" src="images/kresla1/spectrum.jpg" alt=""></div>
          <div class="details2"><p>Кресло Spectrum</p><p class="material">Материал - мебельный хлопок,наполнение - гранулы пенополистерола</p>
              <div class="preferance">
                <p>Ткань:</p><br><br>
                <p>Цена:</p><br><br>
                <p>Цвет:</p>
              </div>
              <div class="preferance_get">
                <p>Кожа</p><br><br>
                <h3 class="price">3 540 руб.</h3>
                 <div class="image_spectrum">
                 <img src="images/kresla1/spectrum_color.png" alt="" onclick="swapImageSpectrum_1();">
                 <img src="images/kresla1/spectrum_color2.png" alt="" onclick="swapImageSpectrum_2();">
                 <img src="images/kresla1/spectrum_color3.png" alt="" onclick="swapImageSpectrum_3();">
                 <img src="images/kresla1/spectrum_color4.png" alt=""onclick="swapImageSpectrum_4();">
                 
                </div>
                 <a class="order-buttnn20" href="#zakaz_neo1">Заказать</a>
              </div>
          </div>
      </div>       
    </div> 



   <div class="telefon2">
        <p class="number-tel2">8 (499) <span class="fooo">32 55 44</span></p>
        <a class="order-buttnn5" href="#wind-zakaz-top">ЗАКАЗАТЬ ЗВОНОК</a>
      </div>
      <div class="telefon">
        <p class="number-tel2">8 (499) <span class="fooo">32 55 44</span></p>
        <a class="order-buttnn5" href="#wind-zakaz-top">ЗАКАЗАТЬ ЗВОНОК</a>
      </div>

      <div class="center-980-pop">
    <a href="#x" class="overlay-zvonokt" id="wind-zakaz-top"></a>  
    <div class="popup-zvonokt">      
      <a class="close" title="Закрыть" href="#close"></a>
      <div class="wind-zakaz-top">
        <form class="s_form" action="index.php" method="POST">          
          <input class="s_text nameinp sinp" type="text" name="name" placeholder="Ваше имя...*">
          <input class="s_text phoneinp sinp" type="text" name="phone" placeholder="Ваш телефон...*">
          <input type="hidden"  name="mail" class="email" value="none@none.ru"> 


          <input type="hidden" value="C" name="button">
          <input type="hidden"  name="comment" value="None">
          <input class="s_submit" type="button" value="Заказать звонок">
        </form>
      </div>       
    </div> ></div>

  </div>
    	<div class="logo"><a href="index.php">СВ-Мебель.РФ</a>
    		<p>Магазин офисной мебели с доставкой по Москве и Московской области</p></div>
    		<div class="linia"></div>
    		<div class="mini-content">
          <div class="timer">
                <div id="countdown"></div><p>До конца акции:</p>
          </div>
    			<div class="car">
    				<h3>Офис-Мебель.РФ</h3></div>
    				<h1>Бесплатная доставка</h1></div>
    				<div class="zayavka"><p>Оставте заявку сейчас и получите <span class="letter">скидку 30%</span> на офисное кресло</p> 
             
              <div class="wind-zakaz-top2">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон *">
            <input class="adress" type="hidden" name="other" value="Акция">
            <input class="adress" type="hidden" name="color" value="">
            <input class="adress" type="hidden" name="quality" value="">
            
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Оставить заявку">
        </form>
      </div> 

              <h4>Наш менеджер свяжется с Вами после оформления заявки</h4></div>
    		
    		<div class="linia2"><div class="half1"></div><div class="half2"></div><p>  Преимущества работы с нами</p></div>
    			<div class="block1"><p>Гарантия 12 месяцев</p></div>
    			<div class="block2"><p>Гарантия качества</p></div>
    			<div class="block3"><p>Любой диапазон цен</p></div>
    			<div class="block4"><p>100% гарантия возврата денег</p></div>
    			<div class="block5"><p>Оперативная доставка по всей России</p></div>
<div class="linia3"><div class="half3_1"></div><div class="half3_2"></div><p>Наша продукция</p></div>
		<p class="letter">от 25.000 до 12.500 рублей</p>
			<div class="chair">
				 <div class="carousel"> 
 
      <div class="carousel-button-left"><a href="javascript:void(0);"> </a></div> 
      <div class="carousel-button-right"><a href="javascript:void(0);"> </a></div> 
 
 
      <div class="shadow-block" style="padding-left:0px;">
         <div class="t"><div class="b"><div class="m"><div class="m">
         <div class="t"><div class="t"><div class="b"><div class="b">
            <div class="carousel-wrapper"> 
               <div class="carousel-items"> 
 
                  <div class="carousel-block">	
                         <img src="images/1_1.png" alt="" /><p>Кресло Impreza</p><p class="bottom">Цена: 20 540 руб.</p><a class="order-buttnn3" href="#zakaz_impreza">Заказать</a><a class="color" href="#details_impreza">Подробнее</a>
                  </div>
 
                  <div class="carousel-block">
                        <img src="images/1_2.png" alt="" /><p>Кресло Teramo</p><p class="bottom">Цена: 16 290 руб.</p><a class="order-buttnn3" href="#zakaz_teramo">Заказать</a><a class="color" href="#details_teramo">Подробнее</a>
                  </div>
 
                  <div class="carousel-block">
                        <img src="images/1_3.png" alt="" /><p>Кресло Arzonia</p><p class="bottom">Цена: 12 790 руб.</p><a class="order-buttnn3" href="#zakaz_arzonia">Заказать</a><a class="color" href="#details_arzonia">Подробнее</a>
                  </div>
 
                  <div class="carousel-block">
                        <img src="images/1_4.png" alt="" /><p>Кресло Arezzo</p><p class="bottom">Цена: 14 940 руб.</p><a class="order-buttnn3" href="#zakaz_arezzo">Заказать</a><a class="color" href="#details_arezzo">Подробнее</a>
                  </div>

               <div class="carousel-block"> 
                         <img src="images/1_1.png" alt="" /><p>Кресло Impreza</p><p class="bottom">Цена: 20 540 руб.</p><a class="order-buttnn3" href="#zakaz_impreza">Заказать</a><a class="color" href="#details_impreza">Подробнее</a>
                  </div>
 
                  <div class="carousel-block">
                        <img src="images/1_2.png" alt="" /><p>Кресло Teramo</p><p class="bottom">Цена: 16 290 руб.</p><a class="order-buttnn3" href="#zakaz_teramo">Заказать</a><a class="color" href="#details_teramo">Подробнее</a>
                  </div>
 
                  <div class="carousel-block">
                        <img src="images/1_3.png" alt="" /><p>Кресло Arzonia</p><p class="bottom">Цена: 12 790 руб.</p><a class="order-buttnn3" href="#zakaz_arzonia">Заказать</a><a class="color" href="#details_arzonia">Подробнее</a>
                  </div>
 
                  <div class="carousel-block">
                        <img src="images/1_4.png" alt="" /><p>Кресло Arezzo</p><p class="bottom">Цена: 14 940 руб.</p><a class="order-buttnn3" href="#zakaz_arezzo">Заказать</a><a class="color" href="#details_arezzo">Подробнее</a>
                  </div>

                     
                  
 
               </div>
            </div>
         </div></div>
         </div></div></div>
         </div></div></div>
      </div>   
   </div>
			</div><p class="letter2">от 12.500 до 5.000 рублей</p>

		<div class="chair3">
			
			 <div class="carousel-button-left3"><a href="javascript:void(0);"> </a></div> 
      <div class="carousel-button-right3"><a href="javascript:void(0);"> </a></div> 
 
 
      <div class="shadow-block3" style="padding-left:0px;">
         <div class="t"><div class="b"><div class="m"><div class="m">
         <div class="t"><div class="t"><div class="b"><div class="b">
            <div class="carousel-wrapper3"> 
               <div class="carousel-items3"> 
 
                  <div class="carousel-block3">	
                         <img src="images/2_1.png" alt="" /><p>Кресло 767</p><p class="bottom">Цена: 5 190 руб.</p><a class="order-buttnn3" href="#zakaz_767">Заказать</a><a class="bottom" href="#details_767">Подробнее</a>
                  </div>
 
                  <div class="carousel-block3">
                        <img src="images/2_2.png" alt="" /><p>Кресло Neo3</p><p class="bottom">Цена: 5 540 руб.</p><a class="order-buttnn3" href="#zakaz_neo3">Заказать</a><a class="bottom" href="#details_neo3">Подробнее</a>
                  </div>
 
                  <div class="carousel-block3">
                        <img src="images/2_3.png" alt="" /><p>Кресло 902</p><p class="bottom">Цена: 5 900 руб.</p><a class="order-buttnn3" href="#zakaz_902">Заказать</a><a class="bottom" href="#details_902">Подробнее</a>
                  </div>
 
                  <div class="carousel-block3">
                        <img src="images/2_4.png" alt="" /><p>Кресло Compact</p><p class="bottom">Цена: 6 470 руб.</p><a class="order-buttnn3" href="#zakaz_compact">Заказать</a><a class="bottom" href="#details_compact">Подробнее</a>
                  </div>

                  <div class="carousel-block3">
                        <img src="images/2_5.png" alt="" /><p>Кресло 888</p><p class="bottom">Цена:5 090 руб.</p><a class="order-buttnn3" href="#zakaz_888">Заказать</a><a class="bottom" href="#details_888">Подробнее</a>
                  </div>

                  <div class="carousel-block3">
                        <img src="images/2_6.png" alt="" /><p>Кресло Bergamo</p><p class="bottom">Цена:7 280 руб.</p><a class="order-buttnn3" href="#zakaz_bergamo">Заказать</a><a class="bottom" href="#details_bergamo">Подробнее</a>
                  </div>

                 

                  <div class="carousel-block3">
                        <img src="images/2_8.png" alt="" /><p>Кресло inter</p><p class="bottom">Цена:6 920 руб.</p><a class="order-buttnn3" href="#zakaz_inter">Заказать</a><a class="bottom" href="#details_inter">Подробнее</a>
                  </div>

                  <div class="carousel-block3">
                        <img src="images/2_9.png" alt="" /><p>Кресло Brindisi</p><p class="bottom">Цена:7 290 руб.</p><a class="order-buttnn3" href="#zakaz_brindisi">Заказать</a><a class="bottom" href="#details_brindisi">Подробнее</a>
                  </div>

                  <div class="carousel-block3">
                        <img src="images/2_10.png" alt="" /><p>Кресло turin</p><p class="bottom">Цена:11 890 руб.</p><a class="order-buttnn3" href="#zakaz_turin">Заказать</a><a class="bottom" href="#details_turin">Подробнее</a>
                  </div>






 
               </div>
				
		</div>
		<p class="letter3">от 5.000 до 2.500 рублей</p>

		<div class="chair4">
			
			<div class="carousel-button-left2"><a href="javascript:void(0);"> </a></div> 
      <div class="carousel-button-right2"><a href="javascript:void(0);"> </a></div> 
 
 
      <div class="shadow-block2" style="padding-left:0px;">
         <div class="t"><div class="b"><div class="m"><div class="m">
         <div class="t"><div class="t"><div class="b"><div class="b">
            <div class="carousel-wrapper2"> 
               <div class="carousel-items2"> 
 
                  <div class="carousel-block2">	
                         <img src="images/3_1.png" alt="" /><p>Кресло 747</p><p class="bottom">Цена: 3 490 руб.</p><a class="order-buttnn3" href="#zakaz_747">Заказать</a><a class="bottom" href="#details_747">Подробнее</a>
                  </div>
 
                  <div class="carousel-block2">
                        <img src="images/3_2.png" alt="" /><p>Кресло Buro</p><p class="bottom">Цена: 4 390 руб.</p><a class="order-buttnn3" href="#zakaz_buro">Заказать</a><a class="bottom" href="#details_buro">Подробнее</a>
                  </div>
 
                  <div class="carousel-block2">
                        <img src="images/3_3.png" alt="" /><p>Кресло Davos</p><p class="bottom">Цена: 4 590 руб.</p><a class="order-buttnn3" href="#zakaz_davos">Заказать</a><a class="bottom" href="#details_davos">Подробнее</a>
                  </div>
 
                  <div class="carousel-block2">
                        <img src="images/3_4.png" alt="" /><p>Кресло Leader</p><p class="bottom">Цена: 3 290 руб.</p><a class="order-buttnn3" href="#zakaz_leader">Заказать</a><a class="bottom" href="#details_leader">Подробнее</a>
                  </div>

                  

                  <div class="carousel-block2">
                        <img src="images/3_8.png" alt="" /><p>Кресло Devon</p><p class="bottom">Цена: 4 370 руб.</p><a class="order-buttnn3" href="#zakaz_devon">Заказать</a><a class="bottom" href="#details_devon">Подробнее</a>
                  </div>
                 

                  <div class="carousel-block2">
                        <img src="images/3_14.png" alt="" /><p>Кресло neo1</p><p class="bottom">Цена: 4 870 руб.</p><a class="order-buttnn3" href="#zakaz_neo1">Заказать</a><a class="bottom" href="#details_neo1">Подробнее</a>
                  </div>

                  <div class="carousel-block2">
                        <img src="images/3_20.png" alt="" /><p>Кресло neo2</p><p class="bottom">Цена: 4 890 руб.</p><a class="order-buttnn3" href="#zakaz_neo2">Заказать</a><a class="bottom" href="#details_neo2">Подробнее</a>
                  </div>


                  <div class="carousel-block2">
                        <img src="images/3_24.png" alt="" /><p>Кресло parma</p><p class="bottom">Цена: 3 690 руб.</p><a class="order-buttnn3" href="#zakaz_parma">Заказать</a><a class="bottom" href="#details_parma">Подробнее</a>
                  </div>

                  <div class="carousel-block2">
                        <img src="images/3_25.png" alt="" /><p>Кресло polo</p><p class="bottom">Цена: 4 790 руб.</p><a class="order-buttnn3" href="#zakaz_polo">Заказать</a><a class="bottom" href="#details_polo">Подробнее</a>
                  </div>

                  <div class="carousel-block2">
                        <img src="images/3_26.png" alt="" /><p>Кресло spectrum</p><p class="bottom">Цена: 3 540 руб.</p><a class="order-buttnn3" href="#zakaz_spectrum">Заказать</a><a class="bottom" href="#details_spectrum">Подробнее</a>
                  </div>

 
               </div>


		</div>

		<div class="consultation"><p>Остались вопросы? Закажите бесплатную консультацию!</p>

       <div class="wind-zakaz-top3">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="Заказ консультации">
            <input class="adress" type="hidden" name="color" value="">
            <input class="adress" type="hidden" name="quality" value="">
            
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Оставить заявку">
        </form>
      </div> 

      <div class="linia4"><div class="half4_1"><p>Почему выбирают нас</p><div class="half4_2"></div></div></div></div>
    </div>



    <div id="content_2">
      <div class="minus">
        <p>У других:</p>
        <ul>
          <li><img alt="redecor" src="images/minus.png"><p><span class="letter3">Низкое качество.</span> Кресла выполнены из некачественного
материала, в следствии чего быстро изнашиваются</p></li>
          <li><img alt="redecor" src="images/minus.png"><p><span class="letter3">Плохое обслуживание.</span> Менеджер “хамит” или общается с Вами небодобающе.</p></li>
          <li><img alt="redecor" src="images/minus.png"><p><span class="letter3">Отсуствие гарантии.</span> Продавец не предоставляет гарантию на свой товар.</p></li>
          <li><img alt="redecor" src="images/minus.png"><p><span class="letter3">Продавец пропал.</span> После осуществлении продажи продавец бросает телефон или не берет трубку.</p></li>
        </ul>
      </div>
      <div class="plus">
        <p >У нас:</p>
        <ul>
          <li><img alt="redecor" src="images/plus.png"><p><span class="letter3">100% гарантия качества.</span>На всю продукцию можем предоставить сертификаты качества.</p></li>
          <li><img alt="redecor" src="images/plus.png"><p><span class="letter3">Оперативная доставка.</span>  Доставим мебель точно в указанный срок.</p></li>
          <li><img alt="redecor" src="images/plus.png"><p><span class="letter3">Гарантия 12 месяцев.</span>  Мы предоставляем гарантию 12 месяцев на всю нашу мебель.</p></li>
          <li><img alt="redecor" src="images/plus.png"><p><span class="letter3">Обратная связь.</span>  Мы контролируем качество нашего сервиса, поэтому собираем отзывы всех клиентов.</p></li>
        </ul>
      </div>
      <div class="linia5"><div class="half5_1"><p>Как мы работаем</p><div class="half5_2"></div></div></div>
      <div class="middle"></div>
      <div class="consultation2"><p>Остались вопросы? Закажите бесплатную консультацию!</p>
<div class="wind-zakaz-top3">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="Заказ консультации">
            <input class="adress" type="hidden" name="color" value="">
            <input class="adress" type="hidden" name="quality" value="">
            
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Оставить заявку">
        </form>
      </div> 
        <div class="linia6"><div class="half6_1"><p>Наши сертификаты</p><div class="half6_2"></div></div></div>
      <div class="sertification">
        <a  href="#sertificat1" ><img src="images/sertificat1.png" alt="" width="165"/></a>
        <a  href="#sertificat2" ><img src="images/sertificat2.png" alt="" width="165"/></a>
        <a  href="#sertificat3" ><img src="images/sertificat3.png" alt="" width="165"/></a>
        <a  href="#sertificat6" ><img src="images/sertificat6.png" alt="" width="165"/></a>
      </div>
      <div class="linia7"><div class="half7_1"></div><div class="half7_2"></div><p>Наши клиенты</p></div>
    <div class="clients"></div><div class="consultation3"><p>Остались вопросы? Закажите бесплатную консультацию!</p>
    <div class="wind-zakaz-top3">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="Заказ консультации">
            <input class="adress" type="hidden" name="color" value="">
            <input class="adress" type="hidden" name="quality" value="">
            
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Оставить заявку">
        </form>
      </div> 
      </div>
    <div class="linia8"><div class="half8_1"><p>Отзывы</p><div class="half8_2"></div></div></div>
    <div class="comments"><p>Она встала, подсела к нам, оживилась... и мы только в два часа ночи вспомнили, что доктора велят ложиться спать в одиннадцать. В одном из домов слободки, построенном на краю обрыва, заметил я чрезвычайное освещение; по временам раздавался нестройный говор и крики, изобличавшие военную пирушку. Я слез и подкрался к окну; неплотно притворенный ставень позволил мне видеть пирующих и расслышать их слова. Говорили обо мне.  Расставшись с Максимом Максимычем, я живо проскакал Терекское и Дарьяльское ущелья, завтракал в Казбеке, чай пил в Ларсе, а к ужину поспел в Владыкавказ. Избавлю вас от описания гор, от возгласов, которые ничего не выражают, от картин, которые ничего не изображают, особенно для тех, которые там не были, и от статистических замечаний, которые решительно никто читать не станет</p><h3>Артур Фадеев</h3><img src="images/comments.png"><h4>Начальник объекта
44 года, г. Москва</h4>
    <div class="comments"><p>Она встала, подсела к нам, оживилась... и мы только в два часа ночи вспомнили, что доктора велят ложиться спать в одиннадцать. В одном из домов слободки, построенном на краю обрыва, заметил я чрезвычайное освещение; по временам раздавался нестройный говор и крики, изобличавшие военную пирушку. Я слез и подкрался к окну; неплотно притворенный ставень позволил мне видеть пирующих и расслышать их слова. Говорили обо мне.  Расставшись с Максимом Максимычем, я живо проскакал Терекское и Дарьяльское ущелья, завтракал в Казбеке, чай пил в Ларсе, а к ужину поспел в Владыкавказ. Избавлю вас от описания гор, от возгласов, которые ничего не выражают, от картин, которые ничего не изображают, особенно для тех, которые там не были, и от статистических замечаний, которые решительно никто читать не станет</p><h3>Артур Фадеев</h3><img src="images/comments.png"><h4>Начальник объекта
44 года, г. Москва</h4>

    <div class="comments"><p>Она встала, подсела к нам, оживилась... и мы только в два часа ночи вспомнили, что доктора велят ложиться спать в одиннадцать. В одном из домов слободки, построенном на краю обрыва, заметил я чрезвычайное освещение; по временам раздавался нестройный говор и крики, изобличавшие военную пирушку. Я слез и подкрался к окну; неплотно притворенный ставень позволил мне видеть пирующих и расслышать их слова. Говорили обо мне.  Расставшись с Максимом Максимычем, я живо проскакал Терекское и Дарьяльское ущелья, завтракал в Казбеке, чай пил в Ларсе, а к ужину поспел в Владыкавказ. Избавлю вас от описания гор, от возгласов, которые ничего не выражают, от картин, которые ничего не изображают, особенно для тех, которые там не были, и от статистических замечаний, которые решительно никто читать не станет</p><h3>Артур Фадеев</h3><img src="images/comments.png"><h4>Начальник объекта
44 года, г. Москва</h4>
    
    <div class="comments"><p>Она встала, подсела к нам, оживилась... и мы только в два часа ночи вспомнили, что доктора велят ложиться спать в одиннадцать. В одном из домов слободки, построенном на краю обрыва, заметил я чрезвычайное освещение; по временам раздавался нестройный говор и крики, изобличавшие военную пирушку. Я слез и подкрался к окну; неплотно притворенный ставень позволил мне видеть пирующих и расслышать их слова. Говорили обо мне.  Расставшись с Максимом Максимычем, я живо проскакал Терекское и Дарьяльское ущелья, завтракал в Казбеке, чай пил в Ларсе, а к ужину поспел в Владыкавказ. Избавлю вас от описания гор, от возгласов, которые ничего не выражают, от картин, которые ничего не изображают, особенно для тех, которые там не были, и от статистических замечаний, которые решительно никто читать не станет</p><h3>Артур Фадеев</h3><img src="images/comments.png"><h4>Начальник объекта
44 года, г. Москва</h4></div></div></div></div>

  <div class="consultation4"><p>Остались вопросы? Закажите бесплатную консультацию!</p>
<div class="wind-zakaz-top3">
        <form class="s_form" action="index.php" method="POST">
            <input class="s_text nameinp sinp copy-form" type="text" name="name" placeholder="Ваше имя...*">
            <input class="s_text nameinp sinp copy-form" type="text" name="phone" placeholder="Ваш телефон...*">
            <input class="adress" type="hidden" name="other" value="Заказ консультации">
            <input class="adress" type="hidden" name="color" value="">
            <input class="adress" type="hidden" name="quality" value="">
            
            <input type="hidden"  name="email" class="email" value="none@none.ru">
            <input type="hidden" value="C" name="button">
            <input type="hidden"  name="comment" value="None">            
            <input class="s_submit copy-form" type="button" name="send" value="Оставить заявку">
        </form>
      </div> 
    <div class="linia_bottom"></div>
<div class="logo_bottom"><p>Магазин офисной мебели с доставкой по Москве и Московской области</p>
        <a href="index.php">СВ-Мебель.РФ</a></div>
        
          
    </div>

</body>