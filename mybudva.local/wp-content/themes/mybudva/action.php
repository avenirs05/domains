<div style="text-align: center;
        background: #689DEC;
        display: block;
        margin: 10% auto 0;
        width: 40%;
        font-size: 20px;
        padding: 2em;
        color: #fff;
        font-family: Verdana, sans-serif;
        border-radius: 5px;">Ваша заявка успешно отправлена! 
Специалист свяжется с Вами в ближайшее время.
</div>

<?php

    if(!empty($_POST["phone"])){
        
        $name = trim(stripslashes(strip_tags($_POST["name"])));
        $phone = trim(stripslashes(strip_tags($_POST["phone"])));
        
        if(!empty($_POST["email"]) && !empty($_POST["message"])){
            $email = trim(stripslashes(strip_tags($_POST["email"])));
            $message = trim(stripslashes(strip_tags($_POST["message"])));
        } 
				else{
            $email = "No";
            $message = "";
        }
        
        $subject = "Новое сообщение с сайта mybudva.com";
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: С сайта <'.$email.'>' . "\r\n";
        
        $message = '
        <html>
            <head>
                <title>Новое сообщение с сайта</title>
            </head>
            <body style="font-family:Verdana,sans-serif;">
                <p><b>Имя:</b> "'.$name.'"</p>
                <p><b>E-mail:</b> "'.$email.'"</p>
                <p><b>Телефон:</b> "'.$phone.'"</p>
                <p><b>Сообщение:</b><br>"'.$message.'</p><br>----------<br>
            </body>
        </html>
        ';
        
        //SendMail($admin_email, $user_email, $subject, $msg, $headers);
        mail("info@mybudva.com", $subject, $message, $headers);
        
        echo '<div style="text-align: center;
        background: #689DEC;
        display: block;
        margin: 10% auto 0;
        width: 17%;
        font-size: 20px;
        padding: 2em;
        color: #fff;
        font-family: Verdana, sans-serif;
        border-radius: 5px;">Ваше сообщение отправлено!</div>';
        
    }

?>