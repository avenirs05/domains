<?php get_header(); ?>

<div class="container-fluid main-screen">
    <div class="row">
        <div class="col-md-12">
            <h2 class="main-screen-offset-mob">Профессиональное управление недвижимостью в Черногории</h2>
            <h4>Ваша недвижимость перестанет быть бременем и начнет приносить доход уже летом 2017 года!</h4>
            <div class="container-fluid visible-md-block visible-lg-block">
                <div class="row">
                    <div class="col-md-12">
                        <button id="btn-partnership" class="btn-begin main-screen-offset">Начать сотрудничество
                        </button>
                    </div>
                </div>
            </div>
            <div class="container-fluid visible-xs-block visible-sm-block">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#form-bottom">
                            <button class="btn-begin main-screen-offset">Начать сотрудничество
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="main-screen-offset">Сдаём в аренду и круглогодично обслуживаем апартаменты и виллы более 5 лет</h2>
        </div>
    </div>
</div>


<div class="container-fluid right-page">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php dynamic_sidebar('right-page-list'); ?>
        </div>
    </div>
</div>

<div class="container-fluid why-need">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="h-right-page">Зачем мы вам нужны?</h2>
            <?php $query_why_need = new WP_Query(array ('category_name' => 'why-need')); ?>
            <?php if ($query_why_need->have_posts()) : while ($query_why_need->have_posts()) : $query_why_need->the_post(); ?>
                <h4> <?php the_title(); ?> </h4>
                     <?php the_content(); ?>              
            <?php endwhile; ?>
            <?php endif; ?>         
            <p class="why-need-border">Если вы не хотите сдавать в аренду вашу недвижимость, а вам просто требуется поддержание ее в надлежащем состоянии, то мы предложим программу управления без соответствующих услуг. В этом случае мы гарантируем, что ваши расходы на содержание собственности будут минимальны, а радость от посещения Черногории не будет разбавлена неожиданными заботами.</p> 
          </div>
    </div>
</div>

<div class="container-fluid examples">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Примеры нашей работы в цифрах за 2016г.</h2>
                <?php $query_obj = new WP_Query(array ('post_type' => 'object')); ?>
                <?php if ($query_obj->have_posts()) : while ($query_obj->have_posts()) : $query_obj->the_post(); ?>
                <div class="examples-obj">
                    <h3> <?php the_title(); ?> </h3>
                    <ul>
                        <li class="li-obj"><span class="bold">Цена объекта:</span> <?php  echo types_render_field( "price_of_obj", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Начало сотрудничества:</span> <?php  echo types_render_field( "start_of_partnership", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Вложения перед сезоном:</span> <?php  echo types_render_field( "investments", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Финансовый результат в 2015г.:</span> <?php  echo types_render_field( "financial_results", array() ); ?> </li>
                        <li>
                        <br>
                        <span class="bold">Заполняемость в сезон 2016г.:</span>
                            <ul>          
                                <li class="li-obj">Май – <?php  echo types_render_field( "may", array() ); ?> </li> 
                                <li class="li-obj">Июнь – <?php  echo types_render_field( "june", array() ); ?> </li> 
                                <li class="li-obj">Июль – <?php  echo types_render_field( "july", array() ); ?> </li> 
                                <li class="li-obj">Август – <?php  echo types_render_field( "august", array() ); ?> </li> 
                                <li class="li-obj">Сентябрь – <?php  echo types_render_field( "september", array() ); ?> </li>               
                            </ul>
                        <br>  
                        </li> 
                        <li class="li-obj"><span class="bold">Валовая выручка:</span> <?php  echo types_render_field( "total_amount", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Дополнительная выручка от сдачи в аренду помесячно в низкий сезон:</span> 1400 евро</span> <?php  echo types_render_field( "low_season_amount", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Расходы на коммунальные услуги, уборку, мелкий ремонт, налоги:</span> <?php  echo types_render_field( "costs", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Наше вознаграждение:</span> <?php  echo types_render_field( "revenue", array() ); ?> </li>
                        <li class="li-obj"><span class="bold">Чистый доход собственника:</span> <span class="red bold"> <?php  echo types_render_field( "net_income", array() ); ?> </span> </li>
                        <li class="li-obj"><span class="bold">Ожидаемая средняя заполняемость в 2017г.:</span> <?php  echo types_render_field( "capacity", array() ); ?> </li>
                    </ul>
                </div>                             
                <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid feedback">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Отзывы о нашей работе                
              <p>
                Если вы заинтересованы в получении реальных отзывов о качестве нашей работы от собственников недвижимости в Черногории, просто свяжитесь с нами любым удобным способом, и мы предоставим вам контакты тех из них, кто любезно согласился ответить на ваши вопросы о нас. Мы, в свою очередь, искренне благодарим  наших собственников за то, что они помогают нам совершенствоваться и еще лучше узнавать потребности и проблемы потенциальных клиентов.
              </p>
            </h2>   
        </div>
    </div>
</div>

<?php get_footer(); ?>