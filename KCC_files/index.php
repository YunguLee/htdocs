<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="./css/kcc_style.css"/>
<script type="text/javascript" src="js/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery/flexslider/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="js/jquery/flexslider/flexslider.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function() {
	$('.banner').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		slideshow: true,
		slideshowSpeed: 3000,
		animationLoop: true
	  });
});
</script>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#gnb" tabindex="0">주메뉴 바로가기</a></li>
<li><a href="#content">본문 바로가기</a></li>
</ul>

<!-- //skip nav -->
<div id="wrap" class="main">
	<!-- header -->	
	<div id="header">	
		<h1 class="logo">
			<a href="#" class="sp_com kcc">
				<strong class="blind">KCC 금강컨트리클럽</strong>
			</a>
		</h1>			
		<div id="site_gnb">	
			<ul class="gnb_menu">
			<li><a href="#">로그인</a></li>
			<li><a href="#">회원가입</a></li>
			<li><a href="#">사이트맵</a></li>
			</ul>
			<a class="m_gnb_ico"></a>
		</div>
		<div id="site_menu">
			<h2>
				<a class="m_menu_ico"><span  class="blind">사이트메뉴</span></a>
			</h2>
			<ul class="site_menu_lst">
			<li class="menu_lst1">
				<a href="#" class="sp_com introduct"><span class="blind">Introduction 클럽소개</span></a>
				<ul class="site_sub_menu">
				<li><a href="#"><span class="blind">클럽소개</span></a></li>
				<li><a href="#"><span class="blind">연혁</span></a></li>
				<li><a href="#"><span class="blind">이용안내</span></a></li>
				<li><a href="#"><span class="blind">관계사 소개</span></a></li>
				<li><a href="#"><span class="blind">오시는 길</span></a></li>
				<li><a href="#"><span class="blind">CONTACT US</span></a></li>
				</ul>
			</li>
			<li class="menu_lst2">
				<a href="#" class="sp_com reservation"><span class="blind">RESERVATION 예약정보</span></a>
				<ul class="site_sub_menu">
				<li><a href="#"><span class="blind">예약관리</span></a></li>
				<li><a href="#"><span class="blind">조인관리</span></a></li>
				<li><a href="#"><span class="blind">이용내역</span></a></li>
				<li><a href="#"><span class="blind">위약정보</span></a></li>
				</ul>
			</li>
			<li class="menu_lst3">
				<a href="#" class="sp_com course"><span class="blind">COURCE 코스안내</span></a>
				<ul class="site_sub_menu">
				<li><a href="#"><span class="blind">코스소개</span></a></li>
				<li><a href="#"><span class="blind">서코스</span></a></li>
				<li><a href="#"><span class="blind">동코스</span></a></li>
				<li><a href="#"><span class="blind">남코스</span></a></li>
				<li><a href="#"><span class="blind">코스 갤러리</span></a></li>
				</ul>
			</li>
			<li class="menu_lst4">
				<a href="#" class="sp_com facilities"><span class="blind">FACILITIES 시설안내</span></a>
				<ul class="site_sub_menu">
				<li><a href="#"><span class="blind">클럽하우스</span></a></li>
				<li><a href="#"><span class="blind">특선메뉴</span></a></li>
				<li><a href="#"><span class="blind">그늘집</span></a></li>
				<li><a href="#"><span class="blind">락커룸</span></a></li>
				<li><a href="#"><span class="blind">프로샵</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="sp_com community"><span class="blind">COMMUNITY 커뮤니티</span></a>
				<ul class="site_sub_menu">
				<li><a href="#"><span class="blind">공지사항</span></a></li>
				<li><a href="#"><span class="blind">자료실</span></a></li>
				<li><a href="#"><span class="blind">Joinroom</span></a></li>
				</ul>
			</li>
			</ul>
		</div>
	</div>
	<!-- //header -->
	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
			<div class="sp_bg spot_wth">
				<h2 class="blind">날씨온도 정보</h2>
				<ol class="wth_list">
				<li class="today">						
					<strong class="w_tit">오늘</strong>
					<strong class="w_tit2">02. 14 FRI</strong>
					<img src="img/img_wth.png" width="90" height="70" alt="구름많음" class="w_img">
					<div class="tmpr_info">
						<span class="now_tmpr">23</span>
						<span class="tmpr_ico">℃</span>
					</div>
					<p class="tmpr_info2">
					<span>최고 25℃</span>
					<span>최저 14℃</span>
					<span>강수확률 0%</span>
					</p>
				</li>
				<li class="tomorrow">
					<strong class="w_tit">내일</strong>
					<img src="img/img_wth2.png" width="60" height="45" alt="맑음" class="w_img">
				</li>
				<li class="after_tmr">
					<strong class="w_tit">모레</strong>
					<img src="img/img_wth3.png" width="60" height="45" alt="구름많음" class="w_img">
				</li>
				</ol>
				<a href="#" class="week_wth">주간 날씨보기<span class="sp_main ico"></span></a>
			</div>
			<ul class="spot_link">
			<li>
				<a href="#" class="sp_main reserv">RESERVATION<span class="blind">온라인 예약하기</span></a>
			</li>	
			<li>
				<a href="#" class="sp_main webcam">WEBCAM<span class="blind">현재 필드상태를 보여드립니다</span></a>
			</li>
			<li>
				<a href="#" class="sp_main mobileapp">MOBILE APP<span class="blind">모바일에서도 금강CC를 만나세요</span></a>	
			</li>	
			</ul>	
			<div class="notice_area">
				<div class="sp_bg notice">
					<h3 class="sp_main notice_txt">공지사항</h3>
				</div>
				<div class="sp_bg notice_list">
					<table class="notice_list_in">
					<colgroup>
					<col width="163"><col>
					</colgroup>
					<thead>
					<tr>
					<th scope="col">제목</th>
					<th scope="col">등록일</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td class="title"><a href="#">1~2월 동계휴장 및 그린피 안내1~2월 동계휴장 및 그린피 안내</a></td>
					<td class="reg_date">13.12.18</td>
					</tr>
					<tr>
					<td class="title"><a href="#">12월 티업시간 및 그린피 안내</a></td>
					<td class="reg_date">13.11.14</td>
					</tr>
					<tr>
					<td class="title"><a href="#">2014년 연단체팀 혜택 및 조건</a></td>
					<td class="reg_date">13.11.05</td>
					</tr>
					<tr>
					<td class="title"><a href="#">10월 21일 회원초청 친선골프</a></td>
					<td class="reg_date">13.10.23</td>
					</tr>
					<tr>
					<td class="title"><a href="#">11월 그린피 안내</a></td>
					<td class="reg_date">13.10.26</td>
					</tr>
					</tbody>
					</table>					
					<div class="notice_pg">
						<a href="#" class="sp_main btn_pre">이전 공지사항</a>
						<a href="#" class="sp_main btn_next">다음 공지사항</a>
						<a href="#" class="notice_more">+ 더보기</a>
					</div>
				</div>
				<!-- http://flexslider.woothemes.com/ -->
				<div class="banner">
					<ul class="bnn_list slides">
					<li>
						<a href="#"><img src="img/main_banner2.gif" width="100%" alt="현대카드 M포인트 사용가능" class="bnn_img"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner3.jpg"  width="100%" alt="현대카드 M포인트 사용가능" class="bnn_img"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner2.gif"  width="100%" alt="현대카드 M포인트 사용가능" class="bnn_img"/></a>
					</li>
					</ul>
				</div>	
			</div>
			<ul class="link_area">			
			<li>
				<a href="#" class="dirctns"><span class="sp_main dirctns_txt">찾아오는 길</span></a>
			</li>
			<li>
				<a href="#" class="contactus"><span class="sp_main contactus_txt">연락하기</span></a>
			</li>
			<li>
				<a href="#" class="clubhouse"><span class="sp_main clubhouse_txt">CLUB HOUSE</span></a>
			</li>
			<li>
				<a href="#" class="courceinfo"><span class="sp_main courceinfo_txt">코스안내</span></a>
			</li>
			</ul>
			<span class="sp_main bg_ico"></span>
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<p class="none_style">사업자등록번호: 126-81-07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p>
					<a href="#" class="licenseInfo sp_main"><span class="blind">사업자 정보확인</span></a>
				</p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>