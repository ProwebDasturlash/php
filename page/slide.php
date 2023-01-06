    <?
    $path = scandir('img/slider/');
    
   
    ?>
        <main class="main">
            <section class="head">
                <h2 class="head__title">Слайдер</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <div class="slider">
                <div class="slider__line">
                    <?for ($i=0; $i < count($path); $i++):
                        if(pathinfo($path[$i], PATHINFO_EXTENSION)):
                        ?>
                    <img src="../img/slider/<?=$path[$i]?>" alt="" class="slider__img">
                    <?endif;
                endfor;?>
                </div>
                <div class="slider__controls">
                    <button class="slider__prev slider__btn"><i class="far fa-chevron-left"></i></button>
                    <button class="slider__next slider__btn"><i class="far fa-chevron-right"></i></button>
                </div>
            </div>
        </main>