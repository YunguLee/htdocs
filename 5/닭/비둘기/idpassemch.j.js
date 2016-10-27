
// <![CDATA[
jQuery( function($) { // HTML 문서를 모두 읽으면 포함한 코드를 실행

	// 정규식을 변수에 할당
	// 정규식을 직접 작성할 줄 알면 참 좋겠지만
	// 변수 우측에 할당된 정규식은 검색하면 쉽게 찾을 수 있다 
	// 이 변수들의 활약상을 기대한다
	// 변수 이름을 're_'로 정한것은 'Reguar Expression'의 머릿글자
	var re_id = /^[a-z0-9_-]{3,16}$/; // 아이디 검사식
	var re_pw = /^[a-z0-9_-]{6,18}$/; // 비밀번호 검사식
	var re_mail = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/; // 이메일 검사식
	var re_url = /^(https?:\/\/)?([a-z\d\.-]+)\.([a-z\.]{2,6})([\/\w\.-]*)*\/?$/; // URL 검사식
    
	// 선택할 요소를 변수에 할당
	// 변수에 할당하지 않으면 매번 HTML 요소를 선택해야 하기 때문에 귀찮고 성능에도 좋지 않다
	// 쉼표를 이용해서 여러 변수를 한 번에 선언할 수 있다
	// 보기 좋으라고 쉼표 단위로 줄을 바꿨다 
	var 
		form = $('.form'), 
		uid = $('#userid'), 
		upw = $('#password'), 
		mail = $('#email');
    
	
for(var i ; i<a.length ; i++)
{
    var fos = $(a[i]);
    if($("input").value == null)
    {
        alert('빈칸이 있습니다.');
        fos.focus();
        return false;
    }
}
    
    
    
    
    
    
	// 선택한 form에 서밋 이벤트가 발생하면 실행한다
	// if (사용자 입력 값이 정규식 검사에 의해 참이 아니면) {포함한 코드를 실행}
	// if 조건절 안의 '정규식.test(검사할값)' 형식은 true 또는 false를 반환한다
	// if 조건절 안의 검사 결과가 '!= true' 참이 아니면 {...} 실행
	// 사용자 입력 값이 참이 아니면 alert을 띄운다
	// 사용자 입력 값이 참이 아니면 오류가 발생한 input으로 포커스를 보낸다
	// 사용자 입력 값이 참이 아니면 form 서밋을 중단한다
	form.submit( function() {

		if (re_id.test(uid.val()) != true) { // 아이디 검사
			alert('[ID 입력 오류] 유효한 ID를 입력해 주세요.');
			uid.focus();
			return false;
		} else if(re_pw.test(upw.val()) != true) { // 비밀번호 검사
			alert('[PW 입력 오류] 유효한 PW를 입력해 주세요.');
			upw.focus();
			return false;
		} else if(re_mail.test(mail.val()) != true) { // 이메일 검사
			alert('[Email 입력 오류] 유효한 이메일 주소를 입력해 주세요.');
			mail.focus();
			return false;
		}  
	});
	
	// #uid, #upw 인풋에 입력된 값의 길이가 적당한지 알려주려고 한다
	// #uid, #upw 다음 순서에 경고 텍스트 출력을 위한 빈 strong 요소를 추가한다
	// 무턱대고 자바스크립트를 이용해서 HTML 삽입하는 것은 좋지 않은 버릇
	// 그러나 이 경우는 strong 요소가 없어도 누구나 form 핵심 기능을 이용할 수 있으니까 문제 없다
	$('#uid, #upw').after('<strong></strong>');
	
	// #uid 인풋에서 onkeyup 이벤트가 발생하면
	uid.keyup( function() {
		var s = $(this).next('strong'); // strong 요소를 변수에 할당
		if (uid.val().length == 0) { // 입력 값이 없을 때
			s.text(''); // strong 요소에 포함된 문자 지움
		} else if (uid.val().length < 3) { // 입력 값이 3보다 작을 때
			s.text('너무 짧아요.'); // strong 요소에 문자 출력
		} else if (uid.val().length > 16) { // 입력 값이 16보다 클 때
			s.text('너무 길어요.'); // strong 요소에 문자 출력
		} else { // 입력 값이 3 이상 16 이하일 때
			s.text('적당해요.'); // strong 요소에 문자 출력
		}
	});
	
	// #upw 인풋에서 onkeyup 이벤트가 발생하면
	upw.keyup( function() {
		var s = $(this).next('strong'); // strong 요소를 변수에 할당
		if (upw.val().length == 0) { // 입력 값이 없을 때
			s.text(''); // strong 요소에 포함된 문자 지움
		} else if (upw.val().length < 6) { // 입력 값이 6보다 작을 때
			s.text('너무 짧아요.'); // strong 요소에 문자 출력
		} else if (upw.val().length > 18) { // 입력 값이 18보다 클 때
			s.text('너무 길어요.'); // strong 요소에 문자 출력
		} else { // 입력 값이 6 이상 18 이하일 때
			s.text('적당해요.'); // strong 요소에 문자 출력
		}
	});
	
	// #tel 인풋에 onkeydown 이벤트가 발생하면
	// 하이픈(-) 키가 눌렸는지 확인
	// 하이픈(-) 키가 눌렸다면 입력 중단
	tel.keydown( function() {
		if(event.keyCode==109 || event.keyCode==189) {
			return false;
		}
	});
});
// ]]>