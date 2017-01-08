<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php wp_title(''); ?></title>

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
    
<!--     <script>
        $( function() {
          $( "#accordion" ).accordion();
        } );
    </script> -->
    <?php wp_head(); ?>
</head>
<body>

<div class="container-fluid visible-md-block visible-lg-block header">
    <div class="row to-fixed">
        <div class="col-md-12">
            <div class="header-left">
                <div class="header-logo">
                    <img src="<?php bloginfo('template_url'); ?> /images/logo-white.png" alt="">
                </div>
                <ul class="header-menu">
                    <?php dynamic_sidebar('menu-header'); ?>
                </ul> 
            </div>
            <div class="header-right ">
                <div class="header-phone ">
                    <div class="header-phone-img glyphicon glyphicon-earphone" aria-hidden="true">      
                    </div>
                    <div class="header-phone-digits ">
                        +382 67 258 666
                    </div>
                </div>
                <div class="header-callback ">
                    <div class="header-callback-email ">
                        info@mybudva.com
                    </div>
                    <div class="header-callback-btn ">
                        <button>ОБРАТНЫЙ ЗВОНОК</button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

