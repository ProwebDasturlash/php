
        <main class="main">
            <section class="head">
                <h2 class="head__title">Регистрация в системе</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>

            <form action="./components/user-reg.php" class="form" method="post" enctype="multipart/form-data">
                <?if($_GET['dublicate']):?><p class="error-dublicate">Bu login band!!!</p><?endif;?>
                <label class="form__label">
                    <span class="form__text">Логин</span>
                    <input type="text" class="form__input" name="login" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Имя</span>
                    <input type="text" class="form__input" name="name" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Фото</span>
                    <input type="file" class="form__input" name="photo" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Пароль</span>
                    <input type="password" class="form__input" name="pass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <label class="form__label">
                    <span class="form__text">Повторите пароль</span>
                    <input type="password" class="form__input" name="confirmpass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <span class="form__error">* Пароли не совподают</span>
                <button class="form__btn">Зарегистрироваться</button>
            </form>
        </main>