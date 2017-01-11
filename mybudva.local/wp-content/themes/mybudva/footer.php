<div class="container-fluid footer">
    <div class="row">
        <div class="col-md-12">   
            <form id="form-bottom" action="action.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <span class="title-input">Имя:</span>
                        <input id="name" type="text" name="name" placeholder="Введите имя">
                    </div>
                    <div class="col-md-4">
                        <span class="title-input">Email:</span>
                        <input id="email" type="text" name="email" placeholder="Введите email">
                    </div>
                    <div class="col-md-4">
                        <span class="title-input">Телефон: <span class="red">*</span></span>
                        <input id="phone" type="text" name="phone" placeholder="Введите номер телефона" required>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12 div-textarea">
                        <span class="title-input">Ваше сообщение:</span>
                        <textarea rows="5" name="message" placeholder="Введите ваше сообщение"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Отправить">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    $(function () {

        $("#callback").click(popUpCallback);
        $("#btn-partnership").click(popUpPartnership);

            function popUpCallback() {
                $("#dialog-callback").dialog( {
                    width: 266,
                    modal: true,
                    title: false,
                } );
            } 

            function popUpPartnership() {
                $("#dialog-partnership").dialog( {
                    width: 414,
                    modal: true,
                    title: false,
                } );
            } 
    });

    $(function () {

        var location = window.location.href;  
        $('.menu li a').each(function () {      
            var link = $(this).attr('href');
            if(location == link) { 
                $(this).addClass('change-color');                
            }
        });
         
    });

</script>

<?php wp_footer(); ?>
</body>
</html>
