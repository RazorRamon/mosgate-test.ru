<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>���������</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

	    <link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!� ����������� jQuery -->
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

		<!-- Facebox - ��������� ���� -->
		<script type="text/javascript" src="/js/facebox.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('a[rel*=facebox]').facebox({
					loading_image : '/images/facebox/loading.gif',
					close_image   : '/images/facebox/closelabel.gif'
				});
			})
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
				<a href="#">������</a>
				<a href="#">�����</a>
				<a href="#">����������</a>
			</div>
			<div class="phone"><span>8 (495)</span> 6-405-405,  <span>8 (495)</span> 647-09-61</div>
			<div class="mail"><a href="mailto:mosgate@yandex.ru">mosgate@yandex.ru</a></div>
			<div class="top_menu">
				<ul>
					<li><a href="/">�������</a></li>
					<li class="active"><a href="/company/">� ��������</a></li>
					<li><a href="/company/certificates.php">�����������</a></li>
					<li><a href="/company/services.php">���� ������</a></li>
					<li><a href="#">����<br />�����������</a></li>
					<li><a href="/company/news.php">�������</a></li>
					<li><a href="/error-404.php">�������</a></li>
					<li><a href="#">��������</a></li>
				</ul>
			</div>
			<div class="send_request"><a href="#">��������� ������</a></div>
		</header>

		<? if(substr_count($_SERVER['REQUEST_URI'],"/company/") or substr_count($_SERVER['REQUEST_URI'],"/contacts/") or substr_count($_SERVER['REQUEST_URI'],"/our-clients/")){?>

		<? } elseif(substr_count($_SERVER['REQUEST_URI'],"/")){?>

			<div id='catalog_on_main'>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup1.png" />
					<a class="grup_link" href="#">�������� ������</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup2.png" />
					<a class="grup_link" href="#">�������� ������</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup3.png" />
					<a class="grup_link" href="#">������������ ������</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup4.png" />
					<a class="grup_link" href="#">���������� ��� �����</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup5.png" />
					<a class="grup_link" href="#">��������� � ����������� �������</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup6.png" />
					<a class="grup_link" href="#">����������, �����������</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup7.png" />
					<a class="grup_link" href="#">���������</a>
				</div>
				<div class="grup">
					<div class="subsections">
						<a href="#">������������ ���������� ������</a>
						<a href="#">�������� ������</a>
						<a href="#">���������� ������</a>
						<a href="#">������������� ������������</a>
						<a href="#">����������� ������</a>
					</div>
					<img src="/images/img_grup8.png" />
					<a class="grup_link" href="#">������� �������� �������</a>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div class="service_repair"><a href="#">������������ � ������</a></div>
			</div>

		<? } ?>
		<main>
			<div class="lines_catalog-list"></div>
			<div id="left_sitebar">
				<div class="catalog">
				<ul>
					<li><a href="#">�������� ������</a>
						<ul>
							<li><a href="#">���������� �������� ������</a></li>
							<li><a href="#">��������-���������� ������</a></li>
							<li><a href="#">�������� �������� ������</a></li>
							<li><a href="#">������������ �������� ������</a></li>
						</ul>
					</li>
					<li><a href="#">�������� ������</a>
						<ul>
							<li><a href="#">�������� (��������) ������</a></li>
							<li><a href="#">��������� ������</a></li>
							<li><a href="#">�������</a></li>
						</ul>			
					</li>
					<li><a href="#">������������ ������</a>
						<ul>
							<li><a href="#">������������ ���������� ������</a></li>
							<li><a href="#">�������� ������</a></li>
							<li><a href="#">���������� ������</a></li>
							<li><a href="#">������������� ������������</a></li>
							<li><a href="#">����������� ������</a></li>
						</ul>
					</li>
					<li><a href="#">���������� ��� �����</a>
						<ul>
							<li><a href="#">������� ��� �������� �����</a></li>
							<li><a href="#">������� ��� ������������ �����</a></li>
							<li><a href="#">������� ��� �������� �����</a></li>
							<li><a href="#">������� ��� ��������� �����</a></li>
						</ul>	
					</li>
					<li><a href="#">��������� � ����������� �������</a>
						<ul>
							<li><a href="#">�������������� ��������� Came</a></li>
							<li><a href="#">�������������� ��������� FAAC</a></li>
							<li><a href="#">�������� ����������� FAAC</a></li>
							<li><a href="#">�������� ����������� BFT</a></li>
						</ul>
					</li>
					<li><a href="#">����������, �����������</a>
						<ul>
							<li><a href="#">����������</a></li>
							<li><a href="#">�����������</a></li>
						</ul>
					</li>
					<li><a href="#">���������</a>
						<ul>
							<li><a href="#">�������� PERCo</a></li>
							<li><a href="#">��������� Praktika</a></li>
							<li><a href="#">��������� OMA</a></li>
						</ul>
					</li>
					<li><a href="#">������� �������� �������</a>
						<ul>
							<li><a href="#">���������� ����������</a></li>
							<li><a href="#">������� �������</a></li>
						</ul>
					</li>
					<li><a href="#">������������ � ������</a></li>
				</ul>
				</div>
			</div>

			<div id="right_box">
				<h1>���������� ������</h1>

				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product1.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� V 3009</a></h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product2.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� V 3510</a></h2>
					<p>���������� ������������ ������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product3.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� � 5020</a></h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� ������������� ������ ��� ����������� ������������� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product4.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� � 5020</a></h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� ������������� ������ ��� ����������� ������������� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product1.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� V 3009</a></h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product2.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� V 3510</a></h2>
					<p>���������� ������������ ������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product3.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� � 5020</a></h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� ������������� ������ ��� ����������� ������������� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
				<div class="product_card_anons">
					<a class="img_product_anons" href="/company/tovar.php"><img src="/images/img_product4.png" /></a>
					<h2><a class="title_product" href="/company/tovar.php">������ �������������������� ������, ���������� � ������������ ����������� � 5020</a></h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� ������������� ������ ��� ����������� ������������� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a href="#infot" class="more_product" rel="facebox">������� ������ ���������</a>
				</div>
			</div>

			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="vacancies"><a href="#">��������</a></div>
			<div class="copyright">������� �
					<a href="#">������</a>
					<a href="#">�����</a>
					<a href="#">����������</a>
				<span>2014</span>
			</div>
			<div class="creator"><a href="#">�������� �����</a> ������</div>
		</footer>

		<!-- ���������� ���������� ���� -->
		<div id="infot" style="display:none;">
			<h1>�� ������������ ���������� �� ������������:</h1>
			<h2>������ �������������������� ������, ���������� � ������������ ����������� V4014</h2>
			<form class="form_modal" method="post" action="#">
				<label for="INFO_POLE">����� ����������<br/>��� ����������?<span class="starrequired">*</span> <textarea name="INFO_POLE" rows="5" cols="30"></textarea></label>
				<div class="clear_div">&nbsp;</div>
				<label for="RAZMERY">����� ����������<br/>������� (��)?
					<div class="dimensions">
						<div>������<input class="short" name="sh" size="10" type="text" value="" /></div>
						<div>������<input class="short" name="he" size="10" type="text" value="" /></div>
						<div>�������<input class="short" name="gl" size="10" type="text" value="" /></div>
					</div>
				</label>
				<div class="clear_div">&nbsp;</div>
				<label class="line_field" for="USER_NAME">�.�.�.<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" /></label>
				<div class="clear_div">&nbsp;</div>
				<label class="line_field" for="PHONE">�������<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" /></label>
				<div class="clear_div">&nbsp;</div>
				<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" /></label>
				<div class="clear_div">&nbsp;</div>
				<label class="line_field" for="ORG">����������� <input type="text" name="ORG" maxlength="255" size="30" value="" /></label>
				<div class="clear_div">&nbsp;</div>
				<label class="line_field" for="ADDRESS">����� <input type="text" name="ADDRESS" maxlength="255" size="30" value="" /></label>
				<div class="clear_div">&nbsp;</div>
				<p><span class="starrequired">* �</span> ���� ����������� ��� ����������</p>
				<div class="line-feedback"></div>
				<p>��� �������� ������� ������� �������� ������</p>
				<button onclick="_gaq.push(['_trackEvent', 'registration', '��']);" name="Register" value="" type="submit">���������</button>
			</form>
		</div>

	</body>
</html>