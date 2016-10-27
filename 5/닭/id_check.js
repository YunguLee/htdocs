function chk(){
    var re_id = /^[a-z0-9_-]{3,16}$/;
    
    if(re_id.test(document.soda.id.value)==false){

     alert("아이디 형식이 올바르지 않습니다.");
     document.soda.id.focus();
     exit;
     }
    document.soda.submit();
}