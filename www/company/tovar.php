<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>�������� ������</title>
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
		
		<!� jQuery-������� -->
		<!--<script type="text/javascript" src="http://jemand.ru/examples/scripts/jquery.tools-1.1.1.js"></script>-->
		<script type="text/javascript" src="/js/jquery.tools-1.1.1.js"></script>

		<script language="javascript">
			$(document).ready(function (){
				$('#tabs').tabs('#tabsText > li', {effect: 'fade', fadeOutSpeed: 300});
				
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
			<div class="lines_catalog-tovar"></div>
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
					<li class="active"><a href="#">������������ ������</a>
						<ul>
							<li><a href="#">������������ ���������� ������</a></li>
							<li><a href="#">�������� ������</a></li>
							<li class="active"><a href="#">���������� ������</a></li>
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
				<div class="product_card_img">
					<a class="bg_product-big" href="#"><img src="/images/img_product-big.png" /></a>
					<div class="dop_img">
						<a class="bg_product-mini" href="#"><img src="/images/img_product-mini.png" /></a>
						<a class="bg_product-mini" href="#"><img src="/images/img_product-mini.png" /></a>
					</div>
				</div>
				<div class="product_card_description">
					<h2>������ �������������������� ������, ���������� � ������������ ����������� V 3009</h2>
					<p>����������� ������������ ������ ��� ����������� ������������� � ������� ����� � ������� ����� ����������� ������������ ������ ��� ����������� �������������</p>
					<p class="maker">�������������: HORMANN (��������)</p>
					<a class="more_product" href="#">������� ������ ���������</a>
				</div>
				
				<div class="clear_div">&nbsp;</div>
				<div id="center">
					<ul id="tabs">
						<li>��������</li>
						<li>����������� ��������������</li>
					</ul>
					<ul id="tabsText">
						<li>
							<p><b>��� ������� ������ ���������� ������� ���������� ������������</b><br />������� ������ V4014 � �������� �� ����� �������� 1,5 �� � ���������� ��������� ����� ����� ����� ������� �����������. ������� �� ���������� ��������������� ��� ������� �������� ������������ � ��������������, �������� � ������ ������������. ��� �������� ����� ��� ������������� � �������� �������� �������� ��������� �� 25 ��/���. �������� ���������� ��������� ��������� � ������������ ������ ��� �����.</p>
							<p><b>������ ��������� ���������� ������������</b><br />����������� ��������� �������� � ���� �������������� ����������� ������� �������� ������ � �������������� ����. �� ������� ������ ���������� ������� �� ������. ��������������� ������� � ���������� �������� �������� �������� � ������� �� �������� ������� �� ����������� ������������. ������������� � ������������������ �������. ��� �������������������� ������ � ���������� � �������� ������, ��������������� ��� ������������������ ���������, ������������� � �������� ��������������� ��������������� ������� �����-������������� ��� ��� ��������� ����� �������� ��������� �������������. ������������ ������������ � ������������� ���������� � �������� ������ ����������� �������� ������ �����.
							</p>
						</li>
						<li>
							<b>�������� (�/�):</b><br>
							���������� � 0,9<br>
							���������� � 0,9<br><br>
							<b>������ ����� (��):</b><br>
							������ (LB) � 3000<br>
							������ (LH) � 3000<br><br>
							<b>������, ������� (��):</b><br>
							�����/��������� ���� � 0,8/1,5<br><br>
							<b>����������� ������������ (��):</b><br>
							�� ������� ������� LB + � 310<br>
							�� ������� ����� LB + � 150<br>
							��������� LH + � 300<br>
							���� ���������� (�����) � 160x240x90
						</li>
					</ul>
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
	</body>
</html>