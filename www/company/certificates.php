<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

	    <link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!— Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>

		<script language="javascript">
			$(document).ready(function (){
				var i=2;
				setInterval(function(){
					$('.imgg').fadeOut(2000);
					$('#img'+i).fadeIn(2000);
					i++;
					if(i==3){i=1;}
				}, 5000);	
			});
		</script>
		
		<!— Highslide - jQuery-просмотрщик изображений -->
		<script type="text/javascript" src="/js/highslide.js"></script>
		<link rel="stylesheet" type="text/css" href="/js/highslide.css">

		<script type="text/javascript">
			hs.graphicsDir = '/js/graphics/';
			hs.align = 'center';
			hs.transitions = ['expand', 'crossfade'];
			hs.outlineType = 'rounded-white';
			hs.fadeInOut = true;

			//hs.dimmingOpacity = 0.75;

			// Add the controlbar
			hs.addSlideshow({
				//slideshowGroup: 'group1',
				interval: 5000,
				repeat: false,
				useControls: true,
				fixedControls: 'fit',
				overlayOptions: {
					opacity: 0.75,
					position: 'bottom center',
					hideOnMouseOut: true
				}
			});
		</script>

	</head>
	<body>
		<header>
			<? if(substr_count($_SERVER['REQUEST_URI'],"/company/") or substr_count($_SERVER['REQUEST_URI'],"/contacts/") or substr_count($_SERVER['REQUEST_URI'],"/our-clients/")){?>
				<div class="banner_2"></div>
			<? } elseif(substr_count($_SERVER['REQUEST_URI'],"/")){?>
				<div class="slider">
					<a href="/"><img src="/images/banner_1.png" id="img1" class="imgg" border="0" /></a>
					<a href="/"><img src="/images/banner_3.png" id="img2" class="imgg" style="display:none" border="0"/></a>
					<img src="/images/frame.png" class="frame_slider" />
				</div>
			<? } ?>
			<div id="logo">
				<a href="#">ворота</a>
				<a href="#">двери</a>
				<a href="#">автоматика</a>
			</div>
			<div class="phone"><span>8 (495)</span> 6-405-405,  <span>8 (495)</span> 647-09-61</div>
			<div class="mail"><a href="mailto:mosgate@yandex.ru">mosgate@yandex.ru</a></div>
			<div class="top_menu">
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/company/">О компании</a></li>
					<li class="active"><a href="/company/certificates.php">Сертификаты</a></li>
					<li><a href="/company/services.php">Наши работы</a></li>
					<li><a href="#">СПЕЦ<br />предложения</a></li>
					<li><a href="/company/news.php">Новости</a></li>
					<li><a href="/error-404.php">Клиенты</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="send_request"><a href="#">отправить заявку</a></div>
		</header>

		<? if(substr_count($_SERVER['REQUEST_URI'],"/company/") or substr_count($_SERVER['REQUEST_URI'],"/contacts/") or substr_count($_SERVER['REQUEST_URI'],"/our-clients/")){?>

		<? } elseif(substr_count($_SERVER['REQUEST_URI'],"/")){?>

			<div id='catalog_on_main'>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup1.png" />
					<a class="grup_link" href="#">Гаражные ворота</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup2.png" />
					<a class="grup_link" href="#">Въездные ворота</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup3.png" />
					<a class="grup_link" href="#">Промышленные ворота</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup4.png" />
					<a class="grup_link" href="#">Автоматика для ворот</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup5.png" />
					<a class="grup_link" href="#">Шлагбаумы и парковочные системы</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup6.png" />
					<a class="grup_link" href="#">Рольставни, рольрешетки</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup7.png" />
					<a class="grup_link" href="#">Турникеты</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">Промышленные секционные ворота</a>
						<a href="#">Откатные ворота</a>
						<a href="#">Скоростные ворота</a>
						<a href="#">Перегрузочное оборудование</a>
						<a href="#">Пластиковые завесы</a>
					</div>
					<img src="/images/img_grup8.png" />
					<a class="grup_link" href="#">Системы контроля доступа</a>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div class="service_repair"><a href="#">Обслуживание и ремонт</a></div>
			</div>

		<? } ?>
		<main>
			<div class="lines_catalog-list"></div>
			<div id="left_sitebar">
				<div class="catalog">
				<ul>
					<li><a href="#">Гаражные ворота</a>
						<ul>
							<li><a href="#">Секционные гаражные ворота</a></li>
							<li><a href="#">Подъёмно-поворотные ворота</a></li>
							<li><a href="#">Гаражные рулонные ворота</a></li>
							<li><a href="#">Эксклюзивные гаражные ворота</a></li>
						</ul>
					</li>
					<li><a href="#">Въездные ворота</a>
						<ul>
							<li><a href="#">Сдвижные (откатные) ворота</a></li>
							<li><a href="#">Распашные ворота</a></li>
							<li><a href="#">Калитки</a></li>
						</ul>			
					</li>
					<li><a href="#">Промышленные ворота</a>
						<ul>
							<li><a href="#">Промышленные секционные ворота</a></li>
							<li><a href="#">Откатные ворота</a></li>
							<li><a href="#">Скоростные ворота</a></li>
							<li><a href="#">Перегрузочное оборудование</a></li>
							<li><a href="#">Пластиковые завесы</a></li>
						</ul>
					</li>
					<li><a href="#">Автоматика для ворот</a>
						<ul>
							<li><a href="#">Приводы для гаражных ворот</a></li>
							<li><a href="#">Приводы для промышленных работ</a></li>
							<li><a href="#">Приводы для сдвижных ворот</a></li>
							<li><a href="#">Приводы для распашных ворот</a></li>
						</ul>	
					</li>
					<li><a href="#">Шлагбаумы и парковочные системы</a>
						<ul>
							<li><a href="#">Автоматические шлагбаумы Came</a></li>
							<li><a href="#">Автоматические шлагбаумы FAAC</a></li>
							<li><a href="#">Дорожные блокираторы FAAC</a></li>
							<li><a href="#">Дорожные блокираторы BFT</a></li>
						</ul>
					</li>
					<li><a href="#">Рольставни, Рольрешётки</a>
						<ul>
							<li><a href="#">Рольставни</a></li>
							<li><a href="#">Рольрешётки</a></li>
						</ul>
					</li>
					<li><a href="#">Турникеты</a>
						<ul>
							<li><a href="#">Турникет PERCo</a></li>
							<li><a href="#">Турникеты Praktika</a></li>
							<li><a href="#">Турникеты OMA</a></li>
						</ul>
					</li>
					<li><a href="#">Системы контроля доступа</a>
						<ul>
							<li><a href="#">Автономные устройства</a></li>
							<li><a href="#">Сетевые системы</a></li>
						</ul>
					</li>
					<li><a href="#">Обслуживание и ремонт</a></li>
				</ul>
				</div>
			</div>
			
			<div id="right_box">
				<h1>Сертификаты</h1>
				<div>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate2.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate3.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate4.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate2.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate3.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate4.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate2.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate3.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate4.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate2.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate3.png" /></a>
					<a class="certificate_mini highslide" href="/images/img_certificate-big.jpg" onclick="return hs.expand(this)"><img src="/images/img_certificate4.png" /></a>
				</div>
				<div class="clear_div">&nbsp;</div>
				<font class="text">Начало&nbsp;|&nbsp;Пред.&nbsp;|			
									<b>1</b>
									<a class="page_nomer" href="#">2</a>
									<a class="page_nomer" href="#">3</a>
									<a class="page_nomer" href="#">4</a>
									| <a href="#">След.</a>&nbsp;|<a href="#">Конец</a>&nbsp;
					<noindex>
						|<a href="#" rel="nofollow">Все</a>
					</noindex>
				</font>
				
			</div>

			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="vacancies"><a href="#">Вакансии</a></div>
			<div class="copyright">Мосгейт ©
					<a href="#">ворота</a>
					<a href="#">двери</a>
					<a href="#">автоматика</a>
				<span>2014</span>
			</div>
			<div class="creator"><a href="#">Создание сайта</a> ДиВиЕР</div>
		</footer>
	</body>
</html>