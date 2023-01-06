<main class="main">
    <section class="head">
        <h2 class="head__title">Таблица умножения</h2>
        <p class="head__date">Сегодня 03 Март 2020 год</p>
    </section>
    <form action="" class="form" method="post">
        <label class="form__label">
            <span class="form__text">Количество колонок</span>
            <input type="text" class="form__input" name="col">
        </label>
        <label class="form__label">
            <span class="form__text">Количество строк</span>
            <input type="text" class="form__input" name="row">
        </label>
        <button class="form__btn">Отправить</button>

    </form>

    <div class="table">
        <? for ($i = 1; $i <= $_POST['row']; $i++) : ?>
            <div class="table__row">
                <? for ($k = 1; $k <= $_POST['col']; $k++) : ?>
                    <div class="table__col"><?= $k * $i ?></div>
                <? endfor; ?>
            </div>
        <? endfor; ?>
    </div>


</main>