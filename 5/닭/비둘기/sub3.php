
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>20517 정승리</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<link rel="stylesheet" type="text/css" href="js/jquery/flexslider/flexslider.css" />
<script type="text/javascript" src="js/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script src="http://dmaps.daum.net/map_js_init/postcode.js"></script>
<script>
    new daum.Postcode({
        oncomplete: function(data) {
            /* 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분. */
        }
    }).open();
</script>
<script src="http://dmaps.daum.net/map_js_init/postcode.js"></script>
<script>
    function openDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                // 우편번호와 주소 정보를 해당 필드에 넣고, 커서를 상세주소 필드로 이동한다.
                document.getElementById('h_postcode1').value = data.postcode1;
                document.getElementById('h_postcode2').value = data.postcode2;
                document.getElementById('home_addr1').value = data.address;
                document.getElementById('home_addr2').focus();
            }
        }).open();
    }
    
    function openDaumPostcode2() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                // 우편번호와 주소 정보를 해당 필드에 넣고, 커서를 상세주소 필드로 이동한다.
                document.getElementById('o_postcode1').value = data.postcode1;
                document.getElementById('o_postcode2').value = data.postcode2;
                document.getElementById('office_addr1').value = data.address;
                document.getElementById('office_addr2').focus();
            }
        }).open();
    }
</script>
<script language=javascript> 
function IDduplicatCheck() { 
  mywin = window.open ('mbr_regist_id_check.php?mbrID='+document.DForm.mbrID.value,'IDduplicateCheck','width=434,height=300'); 
mywin.focus(); 
} 
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="idpassemch.j.js"></script>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#site_menu" tabindex="0">주메뉴 바로가기</a></li>
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
			<a class="m_gnb_ico"></a>
		</div>
		<div id="site_menu">
			<h2>
				<a class="m_menu_ico"><span  class="blind">사이트메뉴</span></a>
			</h2>
			<!--해당메뉴 li class에 selected 추가-->
			<div class="menu_lst_wrap">
			<ul class="site_menu_lst">
			<li class="menu1">
				<a href="#" class="sp_com site_menu1">Introduction 클럽소개</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu1_1">클럽소개</a></li>
				<li><a href="#" class="sp_com site_menu1_2">연혁</a></li>
				<li><a href="#" class="sp_com site_menu1_3">이용안내</a></li>
				<li><a href="#" class="sp_com site_menu1_4">관계사 소개</a></li>
				<li><a href="#" class="sp_com site_menu1_5">오시는 길</a></li>
				<li><a href="#" class="sp_com site_menu1_6">CONTACT US</a></li>
				</ul>
			</li>
			<li class="menu2">
				<a href="#" class="sp_com site_menu2">RESERVATION 예약정보</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu2_1">예약관리</a></li>
				<li><a href="#" class="sp_com site_menu2_2">조인관리</a></li>
				<li><a href="#" class="sp_com site_menu2_3">이용내역</a></li>
				<li><a href="#" class="sp_com site_menu2_4">위약정보</a></li>
				</ul>
			</li>
			<li class="menu3">
				<a href="#" class="sp_com site_menu3">COURCE 코스안내</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu3_1">코스소개</a></li>
				<li><a href="#" class="sp_com site_menu3_2">서코스</a></li>
				<li><a href="#" class="sp_com site_menu3_3">동코스</a></li>
				<li><a href="#" class="sp_com site_menu3_4">남코스</a></li>
				<li><a href="#" class="sp_com site_menu3_5">코스 갤러리</a></li>
				</ul>
			</li>
			<li class="menu4">
				<a href="#" class="sp_com site_menu4">FACILITIES 시설안내</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu4_1">클럽하우스</a></li>
				<li><a href="#" class="sp_com site_menu4_2">특선메뉴</a></li>
				<li><a href="#" class="sp_com site_menu4_3">그늘집</a></li>
				<li><a href="#" class="sp_com site_menu4_4">락커룸</a></li>
				<li><a href="#" class="sp_com site_menu4_5">프로샵</a></li>
				</ul>
			</li>
			<li class="menu5">
				<a href="#" class="sp_com site_menu5">COMMUNITY 커뮤니티</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu5_1">공지사항</a></li>
				<li><a href="#" class="sp_com site_menu5_2">자료실</a></li>
				<li><a href="#" class="sp_com site_menu5_3">Joinroom</a></li>
				</ul>
			</li>
			</ul>
			<div class="close_box close_box2">
				<a href="#" class="btn_close"><span class="blind">메뉴 닫기</span></a>
			</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
                    <form action="info.php" method="post" class="form" name="myform">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="#">로그인<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#" class="selected_hard">회원가입<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">아이디/비밀번호찾기<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">회원정보 수정<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">개인정보 취급방침<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">회원서비스</a>						
						<span>&gt;</span>
						<strong>회원가입</strong>
					</p>
					<div class="join_wrap">	
						<h2 class="sp_sub join_title">회원가입</h2>
						<p class="join_txt">다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</p>
						<ol class="join_step">
						<li class="selected">약관동의</li>
						<li>본인인증<span class="sp_sub ico_arr"></span></li>
						<li>회원정보입력<span class="sp_sub ico_arr"></span></li>
						<li>가입완료<span class="sp_sub ico_arr"></span></li>
						</ol>
					</div>
					<div class="article_box">
						<div class="art_tit_wrap">
							<h3 class="article_tit">상세정보 입력</h3>
							<p class="tip"><em>*</em>표시는 필수입력 항목입니다.</p>
						</div>	
                       
						<div class="enter_area">
						<fieldset>
							<table class="enter_form">
							<caption><span>회원정보 입력</span></caption>	
							<tr>
								<th><label for="ko_name">한글이름</label><em>*</em></th>
								<td><input type="text" id="ko_name" class="inptxt" name="ko_name"></td>
							</tr>	
							<tr>
								<th><label for="eg_name">영문이름</label></th>
								<td><input type="text" id="eg_name" class="inptxt" name="eg_name"></td>
							</tr>
							<tr>
								<th><span>생년월일</span><em>*</em></th>
								
								
								<td>
									<select class="sel_box year" name="biryear">
							                 <option value="" selected>년도</option>
							                 <?php
	                                           for($year=1900; $year<=2016; $year++)
	                                           { 
                                                   echo "<option value=".$year.">".$year."</option>"; 
                                               } 
                                            ?>
						              </select>
									<span class="year_txt">년</span>
									
                                    <select class="sel_box year" name="biryear2">
							                 <option value="" selected>년도</option>
							                 <?php
	                                           for($year=1; $year<=12; $year++)
	                                           { 
                                                   echo "<option value=".$year.">".$year."</option>"; 
                                               } 
                                            ?>
						              </select>
									<span class="year_txt">월</span>
									
                                    <select class="sel_box year" name="biryear3">
							                 <option value="" selected>년도</option>
							                 <?php
	                                           for($year=1; $year<=31; $year++)
	                                           { 
                                                   echo "<option value=".$year.">".$year."</option>"; 
                                               } 
                                            ?>
						              </select>
									<span class="year_txt">일</span>
								</td>
							</tr>				
							</tr>	
							<tr>
								<th><label for="userid">아이디</label><em>*</em></th>
								<td>
									<input type="text" id="userid" class="inptxt" name="user_id" onClick="IDduplicatCheck();">
									<a href="#" class="btn_img btn_cnfrm"><span class="btn_img" onClick="IDduplicatCheck();">중복확인</span></a>
									<span class="tip2">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span>
								</td>
							</tr>
							<tr>
								<th><label for="password">비밀번호</label><em>*</em></th>
								<td>
									<input type="password" id="password" class="inptxt" name="passwd">
									<span class="tip2">영문 소문자, 숫자 포함 4자리 이상 10자리 이하입니다.</span>
								</td>
							</tr>
							<tr>
								<th><label for="password_confirm">비밀번호 확인</label><em>*</em></th>
								<td>
									<input type="password" id="password_confirm" class="inptxt" name="passwd_ch">
									<span class="tip2">비밀번호를 한번 더 입력하세요.</span>
								</td>
							</tr>
							<tr>
								<th><span>전화번호</span></th>
								<td>
								    <select name="phone" class="sel_box phone">
							         <option value="2">02</option>
                                        <option value="2">031</option>
                                        <option value="3">032</option>
							             <option value="4">033</option>
                                    </select>
								
									<span class="hyphen">-</span>
									<input type="text" id="tel_m" title="전화번호 중간 번호 입력" class="inptxt w41" name="phone2">		
									<span class="hyphen">-</span>
									<input type="text" id="tel_e" title="전화번호 마지막 번호 입력" class="inptxt w41" name="phone3">
								</td>
							</tr>
							<tr>
								<th><span>휴대폰번호</span><em>*</em></th>
								<td>
									
										<select name="o_phone" class="sel_box phone">
							                 <option value="1">010</option>
                                            <option value="2">011</option>
							                 <option value="3">016</option>
							                 <option value="4">017</option>
							                 <option value="5">018</option>
							                 <option value="6">019</option>
						              </select>
									
									<span class="hyphen">-</span>
									<input type="text" id="mobile_m" title="휴대폰 중간 번호 입력" class="inptxt w41" name="o_phone2">		
									<span class="hyphen">-</span>
									<input type="text" id="mobile_e" title="휴대폰 마지막 번호 입력" class="inptxt w41" name="o_phone3">
									<span class="tip2">예약시 휴대폰으로 문자가 발송됩니다.</span>
								</td>
							</tr>				
							<tr>
								<th><span>SMS 수신여부</span><em>*</em></th>
								<td>
									<div class="rdo_wrap">
										<span class="rdo_btn" onclick="fn_smsclick('Y');">
										<input type="radio" name="agreement" id="agreement_y" checked="checked" value="">
										<span class="rdo_on" id="agree_fake_y"></span>
										</span>
										<label for="agreement_y">예</label>
										<span class="rdo_btn" onclick="fn_smsclick('N');">
										<input type="radio" name="agreement" id="agreement_n" value="">
										<span class="rdo_off" id="agree_fake_n"></span>
										</span>
										<label for="agreement_n">아니오</label>
									</div>
									<span class="tip2">회원공지 알람에 대한 수신여부입니다.</span>
								</td>
							</tr>			
							<tr>
								<th><label for="email">E-MAIL</label></th>
								<td>
									<input type="email" id="email" class="inptxt" name="e_mail">
								</td>
							</tr>
							<tr>
								<th><span>자택 우편번호</span><em>*</em></th>
								<td>
									<input type="text" id="h_postcode1" class="inptxt w23" name="homenumber1">		
									<span class="hyphen">-</span>
									<input type="text" id="h_postcode2" class="inptxt w23" name="homenumber2">
									<a href="#" class="btn_img btn_cnfrm" onclick="openDaumPostcode()"><span class="btn_img" >우편번호 찾기</span></a>
								</td>
							</tr>
							<tr>
								<th><label for="home_addr1">자택주소</label><em>*</em></th>
								<td>
									<p><input type="text" id="home_addr1" class="inptxt w416" name="homeadd1"></p>						
									<p><input type="text" id="home_addr2" title="자택 상세주소" class="inptxt w416 gap" name="homeadd2"></p>
								</td>
							</tr>			
							<tr>
								<th><span>DM발송처</span><em>*</em></th>
								<td>
									<input type="radio" name="dmsend" checked="checked">&nbsp;
									자택
									<input type="radio" name="dmsend" id="office">&nbsp;
									직장
								</td>
							</tr>										
							</table>
						</fieldset>	
						</div>
                        
						<div class="enter_area">
						<fieldset>
							<table class="enter_form">
							<tr>
								<th><label for="office_name">직장명</label><em>*</em></th>
								<td><input type="text" id="office_name" class="inptxt" name="work"></td>
							</tr>			
							<tr>
								<th><label for="job_category">직종</label></th>
								<td><input type="text" id="job_category" class="inptxt" name="job_family"></td>
							</tr>			
							<tr>
								<th><label for="position">직위</label><em>*</em></th>
								<td><input type="text" id="position" class="inptxt" name="position"></td>
							</tr>
							<tr>
								<th><span>직장 우편번호</span><em>*</em></th>
								<td>
									<input type="text" id="o_postcode1" class="inptxt w23" name="workhomenumber1">		
									<span class="hyphen">-</span>
									<input type="text" id="o_postcode2" class="inptxt w23" name="workhomenumber2">
									<a href="#" class="btn_img btn_cnfrm" onclick="openDaumPostcode2()"><span class="btn_img">우편번호 찾기</span></a>
								</td>
							</tr>
							<tr>
								<th><label for="office_addr1">직장주소</label><em>*</em></th>
								<td>
									<p><input type="text" id="office_addr1" class="inptxt w416" name="workhomeadd1"></p>						
									<p><input type="text" id="office_addr2" title="직장 상세주소" class="inptxt w416 gap" name="workhomeadd2"></p>
								</td>
							</tr>
							<tr>
								<th><span>직장전화번호</span></th>
								<td>
								        <select name="work_number" class="sel_box phone" >
							                 <option value="1">010</option>
                                            <option value="2">011</option>
							                 <option value="3">016</option>
							                 <option value="4">017</option>
							                 <option value="5">018</option>
							                 <option value="6">019</option>
						              </select>
									<span class="hyphen">-</span>
									<input type="text" id="office_tel_m" title="직장전화 중간 번호 입력" class="inptxt w41" name="work_number2">		
									<span class="hyphen">-</span>
									<input type="text" id="office_tel_e" title="직장전화 마지막 번호 입력" class="inptxt w41" name="work_number3">
								</td>
							</tr>
							<tr>
								<th><span>팩스번호</span></th>
								<td>
									 
                                    <select name="fax_number" class="sel_box phone">
							                 <option value="1">010</option>
                                            <option value="2">011</option>
							                 <option value="3">016</option>
							                 <option value="4">017</option>
						              </select>
                                      
									<span class="hyphen">-</span>
									<input type="text" id="fax_m" title="팩스 중간번호 입력" class="inptxt w41" name="fax_number2">
									<span class="hyphen">-</span>
									<input type="text" id="fax_e" title="팩스 마지막번호 입력" class="inptxt w41" name="fax_number3">
								</td>
							</tr>			
							<tr>
								<th><span>결혼여부</span></th>
                                <td>
									<input type="radio" name="marry" id="single" checked="checked">&nbsp;
									미혼
									<input type="radio" name="marry" id="married">&nbsp;
									기혼
								</td>
							</tr>
							<tr>
								<th><span>결혼기념일</span></th>
								<td>
									<select class="sel_box year" name="maryear">
							                 <option value="" selected>년도</option>
							                 <?php
	                                           for($year=1900; $year<=2016; $year++)
	                                           { 
                                                   echo "<option value=".$year.">".$year."</option>"; 
                                               } 
                                            ?>
						              </select>
									<span class="year_txt">년</span>
									
                                    <select class="sel_box year" name="maryear2">
							                 <option value="" selected>년도</option>
							                 <?php
	                                           for($year=1; $year<=12; $year++)
	                                           { 
                                                   echo "<option value=".$year.">".$year."</option>"; 
                                               } 
                                            ?>f
						              </select>
									<span class="year_txt">월</span>
									
                                    <select class="sel_box year" name="maryear3">
							                 <option value="" selected>년도</option>
							                 <?php
	                                           for($year=1; $year<=31; $year++)
	                                           { 
                                                   echo "<option value=".$year.">".$year."</option>"; 
                                               } 
                                            ?>
						              </select>
									<span class="year_txt">일</span>
								</td>
							</tr>										
							</table>
						</fieldset>	
						</div>
					</div>
					<div class="btn_wrap">
						<input type="submit" class="sp_sub btn_cancle"></a>
						<input type="submit" class="sp_sub btn_next"></a>
					</div>
                    </form>
                    
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