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
					<li class="active"><a href="/">Главная</a></li>
					<li><a href="/company/">О компании</a></li>
					<li><a href="/company/certificates.php">Сертификаты</a></li>
					<li><a href="/company/services.php">Наши работы</a></li>
					<li><a href="#">СПЕЦ<br />предложения</a></li>
					<li><a href="/company/news.php">Новости</a></li>
					<li><a href="/error-404.php">Клиенты</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="send_request"><a href="#">отправить заявку</a></div>
		</header>

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

		<main>
			<h1>Развитие ворот</h1>
			<div class="left_text">
				<p>Прототипом современных ворот можно считать камень, которым древний человек загораживал вход в своё жилище, спасаясь от холода, диких зверей и набегов вражеских племен. Тогда человек начал строить ограждения, неотъемлемой частью которых и стали ворота. Они не отличались изысканным внешним видом, а носили чисто практический характер. Сначала ворота делали из наиболее доступного и недорогого материала — дерева. Позже ворота стали оббивать железом в декоративных целях. В то время такую роскошь могли позволить себе немногие — ведь железо было достаточно дорогим материалом. Потом железо стало дешевле, появились более лёгкие сплавы. И на смену простым деревянным воротам пришли надежные стальные ворота.</p>
				<p>Очень отличались от современных ворот ворота, созданные в далёкой античности. Скорее это были просто «большие входы» в каменных сооружениях того времени. Позже, уже в XI веке нашей эры, на территории Древней Руси обрели популярность арочные ворота, состоявшие из двух каменных вертикальных колонн и соединявшей их арки. Такие ворота назывались популярным словом «портал». В средневековье практически все замки были окружены рвом с водой, и ворота, опускаясь вниз, выполняли роль моста, ведущего в город. Такие ворота отличались уже относительной</p>
			</div>
			<div class="right_text">
				<p>технической сложностью. Как раз их можно рассматриваться как первые, пусть не автоматические, а полуавтоматические ворота.</p>
				<p>Городские ворота в России служили не только для того, чтобы впускать и выпускать в город и из города людей и грузы, но были ориентированы по сторонам Света и использовались для проведения религиозных обрядов. Например, у Красных ворот в Москве встречали и провожали Масленицу, всенародно ели блины. А в русских деревнях ворота имели свою крышу и запирались на засов изнутри. Через них ввозили различные продукты, всевозможные товары, необходимые для поддержания жизни крестьянского дома. Как правило, в крестьянских владениях было двое ворот: фасадные, украшенные резьбой, и задние, которые обыкновенно выходили в огород.</p>
				<p>В России ворота устанавливали на столбы, или столбицы. Ворота в один щит, в богатых домах — в два щита с калиткой. Иногда устраивались тройные ворота — с двумя калитками. Ворота покрывались небольшой кровлей с полицами (водостоками). Князёк крыши украшался башенками, шатриками, бочками, резными гребнями. По богато украшенным воротам судили о богатстве хозяина дома.</p>
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