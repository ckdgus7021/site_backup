<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <title>회원가입</title>



</head>
<body>
 
    <section>
        <div>
            <div>
                <form action="./member_insert.php" method="post" name="member_join">
                    <h2>회원 가입</h2>

                        <div style="margin-top: 10px">아이디</div>
                        <div><input type="text" name="id"></div>
                        <div style="margin-top: 10px">비밀번호</div>
                        <div><input type="password" name="password"></div>
                        <div style="margin-top: 10px">비밀번호 확인</div>
                        <div><input type="password" name="pass_confirm"></div>
                        <div style="margin-top: 10px">이름</div>
                        <div><input type="text" name="name"></div>
                        <div style="margin-top: 10px">이메일</div>
                            <input type="text" name="email1">@<input type="text" name="email2">
                        <div>
                        <input type = 'submit' name ='btn' value='가입하기' style="margin-top: 30px">
                        </div>
                </form>
            </div>
 
        </div>
    </section>
        
</body>
</html>