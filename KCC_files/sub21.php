<?php
    $db_host="localhost";
$db_name="test1";
$db_type="mysql";
$dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";
$db_user="root";
$db_pass="";

try{
    $pdo=new PDO($dsn,$db_user,$db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print "접속";}
    catch(PDOException $Exception){
        die('오류'.$Exception->getMessage());
    
}

$sql = "select * from bor";
$stmh = $pdo->prepare($sql);
$stmh->execute();
$result = $stmh->fetchAll();
    


?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
    <link rel="stylesheet" type="text/css" href="/css/kcc.css" />
<link rel="stylesheet" type="text/css" href="/css/rubyadd.css" />
<link rel="stylesheet" type="text/css" href="/js/ui/jquery-ui-1.9.2.min.css" />

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	//jquery onload
	$(function(){
		//Html parsing 이 다 된 후 호출되는 영역.
	  $(".lnb li a").mouseover(function(){
	  	$(".lnb li a.selected").removeClass("selected");
	  	$(this).addClass("selected");
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
<div id="wrap" class="sub_bg">
	<!-- header -->	
	<div id="header">	
		<h1 class="logo">
			<a href="#" class="sp_com kcc">
				<strong class="blind">KCC 금강컨트리클럽</strong>
			</a>
		</h1>			
		<div id="site_gnb">	
			<ul class="gnb_menu">
			<li>김윤미님 환영합니다</li>
			<li><a href="#">회원정보수정</a></li>
			<li><a href="#">채팅룸</a></li>
			<li><a href="#">로그아웃</a></li>
			<li><a href="#">사이트맵</a></li>
			</ul>
		</div>
		<div id="site_menu_wrap">
			<div id="site_menu">
				<h2 class="blind">사이트메뉴</h2>
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
	</div>
	<!-- //header -->
	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">커뮤니티</h2>
					<ul class="lnb">
					<li><a href="#"  class="selected_hard">공지사항<span class="sp_sub select_ico"></span></a></li>
                        <li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">커뮤니티</a>						
						<span>&gt;</span>
						<strong>공지사항</strong>
					</p>
					<div class="comm_wrap">
					<h3 class="sp_subtit stit_notice">공지사항</h3>
					<p class="stxt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
					<table class="not_tb">
                        <caption><span class="blind">공지사항 안내</span></caption>
					<thead>
					<tr>
						<th scope="col"><span class="no">번호</span></th>
						<th scope="col"><span class="title">제목</span></th>
						<th scope="col"><span class="date">등록일</span></th>
						<th scope="col"><span class="hit">조회수</span></th>
					</tr>
					</thead>
                        
                        <tbody>
                        <?php
                            
                            foreach($result as $row)
                            {
                                echo "<tr>";
                                    echo "<td>".$row['idx']."</td>";
                                    echo "<td>".$row['title']."</td>";
                                    echo "<td>".$row['day']."</td>";
                                     echo "<td>".$row['viewcount']."</td>";
                                echo "</tr>";
                                
                            }
                        ?>
                        
                        </tbody>
                        </table>
					</div>	
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy_sub">
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
				<p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>