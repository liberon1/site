<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
$APPLICATION->SetPageProperty("description", "Читать подробную информацию данного информационного раздела официального дистрибьютора LEGO в России. Страница сайта: о компании.");
?> 
<div style="float: none; margin: 0px; text-align: center;"><img src="/images/logo.png" border="0" width="400px"  /></div>
 
<p class="text_large"> 
  <br />
 
  <br />
 </p>
 
<h6 style="text-align: center;" class="text_large"> 
  <br />
 
  <br />
 
  <br />
 Компания ООО &quot;Инновационное образование&quot; является официальным партнёром 
  <br />
 
  <br />
компании LEGO EDUCATION в России, Казахстане и Белоруссии. </h6>
 <span class="text_large"> 
  <br />
 
  <br />
 &bull;	Мы принимаем активное участие в развитии технических наук, в частности робототехники, помогая молодому поколению знакомиться с новыми решениями в области конструирования; 
  <br />
 
  <br />
 
  <br />
 •	Мы постоянно развиваемся и расширяем ассортимент товаров 
  <br />
 
  <br />
 
  <br />
 •	Мы всегда стремимся к долгосрочному партнёрству, поэтому предлагаем наиболее выгодные условия сотрудничества для юридических лиц и государственных образовательных учреждений! 
  <br />
 
  <br />
 
  <br />
 </span> 
<p>&nbsp;</p>
 
<p>&nbsp;</p>
 
<p class="text_large"><a href="/about/schools/" >По вопросам сотрудничества для школ и учебных учреждений</a></p>
 
<p class="text_large"><a href="/about/job/" >По вопросам трудоустройства</a></p>
 
<p class="text_large"><a href="/contacts/" >Наши реквизиты</a></p>
 
<p>_________________________________________________________________________________________________________________</p>
 
<p> 
  <br />
 
  <br />
 </p>
 
<div style="float: right; margin: 0px;"><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.76343574536107;s:10:\"yandex_lon\";d:37.55553846102791;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.55697781505943;s:3:\"LAT\";d:55.76254747934682;s:4:\"TEXT\";s:58:\"ООО \"Инновационное образование\"\";}}}",
		"MAP_WIDTH" => "500",
		"MAP_HEIGHT" => "325",
		"CONTROLS" => array(0=>"ZOOM",1=>"TYPECONTROL",2=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?></div>
 <span class="text_large"><b>Наш адрес</b>: г. Москва, ул. 2-я Звенигородская, 
  <br />
 д. 12, стр. 23, офис 10 
  <br />
 
  <br />
 <b>Телефон</b>: +7 (495) 120-21-86 
  <br />
 
  <br />
 <b> E-mail</b>: <a href="mailto:<?=$_SERVER["EMAIL"];?>" ><?=$_SERVER["EMAIL"];?></a> 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 
  <br />
 Более подробную информацию о вариантах сотрудничества вы можете получить в соответствующих разделах сайта (слева) или по телефону +7 (495) 120-21-86</span><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>