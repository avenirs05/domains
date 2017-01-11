<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" />
    <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

    <style>    
        .main-screen {
            background-image: url("<?php bloginfo('template_url')?>/images/main.jpg");
            min-height: 573px;
        }
        @font-face {
            font-family: "OpenSansCondensedLight";
            src: url("<?php bloginfo('template_url')?>/fonts/OpenSans-CondLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;  
        }
    </style>

    <div id="dialog-callback" title="">
        <form action="action.php" method="post">
                <span class="title-input">Имя:</span>
                <input type="text" name="name" placeholder="Введите имя">
                <span class="title-input">Телефон: <span class="red">*</span></span>
                <input type="text" name="phone" placeholder="Введите номер телефона" required>
                <input type="submit" value="Отправить">
        </form>
    </div>

    <div id="dialog-partnership" title="">
        <form action="action.php" method="post">
                <span class="title-input">Имя:</span>
                <input type="text" name="name" placeholder="Введите имя">
                <span class="title-input">Телефон: <span class="red">*</span></span>
                <input type="text" name="phone" placeholder="Введите номер телефона" required>
                <span class="title-input">Email:</span>
                <input type="text" name="email" placeholder="Введите адрес электронной почты">
                <span class="title-input">Ваше сообщение:</span>
                <textarea rows="6" name="message" placeholder="Введите ваше сообщение"></textarea>
                <input type="submit" value="Отправить">
        </form>
    </div>
    
    <?php wp_head(); ?>
</head>
<body>

<div class="container-fluid visible-md-block visible-lg-block header">
    <div class="row to-fixed">
        <div class="col-md-12">
            <div class="header-left">
                <div class="header-logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" alt="">
                </div>
                <ul class="header-menu" id ="header-menu">
                    <?php dynamic_sidebar('menu-header'); ?>
                </ul> 
            </div>
            <div class="header-right">
                <div class="header-phone">
                    <div class="header-phone-img glyphicon glyphicon-earphone" aria-hidden="true">      
                    </div>
                    <div class="header-phone-digits">
                        +382 67 258 666
                    </div>
                </div>
                <div class="header-callback">
                    <div class="header-callback-email">
                        info@mybudva.com
                    </div>
                    <div class="header-callback-btn">
                        <button id="callback">ОБРАТНЫЙ ЗВОНОК</button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class="container-fluid visible-xs-block visible-sm-block header-mob">
    <div class="row">
        <div class="col-md-12">
            <div class="menu-mob">
                <div class="block-in-menu-mob"></div>
                <div class="transp-block-in-menu-mob"></div>
                <div class="block-in-menu-mob"></div>
                <div class="transp-block-in-menu-mob"></div>
                <div class="block-in-menu-mob"></div>
                <div class="transp-block-in-menu-mob"></div>
                <div class="block-in-menu-mob"></div>
            </div>
            <div class="header-logo">
                <img width="80" height="40" src="<?php bloginfo('template_url'); ?>/images/logo-white.png" alt="">
            </div>
            <div class="header-phone-mob">
                <div class="header-phone-img-mob glyphicon glyphicon-earphone" aria-hidden="true">
                </div>
                <div class="header-phone-digits-mob">+382 67 258 666</div>
            </div>        
        </div>    
    </div>
</div>

