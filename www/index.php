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
					<li class="active"><a href="/">�������</a></li>
					<li><a href="/company/">� ��������</a></li>
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

		<main>
			<h1>�������� �����</h1>
			<div class="left_text">
				<p>���������� ����������� ����� ����� ������� ������, ������� ������� ������� ����������� ���� � ��� ������, �������� �� ������, ����� ������ � ������� ��������� ������. ����� ������� ����� ������� ����������, ������������ ������ ������� � ����� ������. ��� �� ���������� ���������� ������� �����, � ������ ����� ������������ ��������. ������� ������ ������ �� �������� ���������� � ���������� ��������� � ������. ����� ������ ����� �������� ������� � ������������ �����. � �� ����� ����� ������� ����� ��������� ���� �������� � ���� ������ ���� ���������� ������� ����������. ����� ������ ����� �������, ��������� ����� ����� ������. � �� ����� ������� ���������� ������� ������ �������� �������� ������.</p>
				<p>����� ���������� �� ����������� ����� ������, ��������� � ������ ����������. ������ ��� ���� ������ �������� ������ � �������� ����������� ���� �������. �����, ��� � XI ���� ����� ���, �� ���������� ������� ���� ������ ������������ ������� ������, ���������� �� ���� �������� ������������ ������ � ����������� �� ����. ����� ������ ���������� ���������� ������ �������. � ������������� ����������� ��� ����� ���� �������� ���� � �����, � ������, ��������� ����, ��������� ���� �����, �������� � �����. ����� ������ ���������� ��� �������������</p>
			</div>
			<div class="right_text">
				<p>����������� ����������. ��� ��� �� ����� ��������������� ��� ������, ����� �� ��������������, � ������������������ ������.</p>
				<p>��������� ������ � ������ ������� �� ������ ��� ����, ����� �������� � ��������� � ����� � �� ������ ����� � �����, �� ���� ������������� �� �������� ����� � �������������� ��� ���������� ����������� �������. ��������, � ������� ����� � ������ ��������� � ��������� ���������, ���������� ��� �����. � � ������� �������� ������ ����� ���� ����� � ���������� �� ����� �������. ����� ��� ������� ��������� ��������, ������������ ������, ����������� ��� ����������� ����� ������������� ����. ��� �������, � ������������ ��������� ���� ���� �����: ��������, ���������� �������, � ������, ������� ����������� �������� � ������.</p>
				<p>� ������ ������ ������������� �� ������, ��� ��������. ������ � ���� ���, � ������� ����� � � ��� ���� � ��������. ������ ������������ ������� ������ � � ����� ���������. ������ ����������� ��������� ������� � �������� (�����������). ����� ����� ��������� ���������, ���������, �������, ������� ��������. �� ������ ���������� ������� ������ � ��������� ������� ����.</p>
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