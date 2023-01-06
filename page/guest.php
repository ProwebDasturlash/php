<?
include_once('./components/db.php');
delComment($_GET['del-id']);
$allComments = getAllComments();
$comment = getComment($_GET['change-id']);
?>
        <main class="main">
            <section class="head">
                <h2 class="head__title">Гостевая книга</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <?if($_SESSION):?>
            <form action="<?=$comment ? './components/changeComment.php' : './components/addComment.php'?>" class="form" method="post">
                <label class="form__label">
                    <span class="form__text"><?=$_SESSION['name']?></span>
                    <input type="text" class="form__input" name="name" disabled>
                    <input type="text" class="form__input" name="id" hidden value="<?=$_GET['change-id']?>">
                </label>
                <label class="form__label">
                    <?if(!$comment):?>
                    <span class="form__text">Оставте отзыв</span>
                    <?endif;?>
                    <textarea class="form__input" name="descr"><?=$comment['comment']?></textarea>
                </label>
                <button class="form__btn"><?=$comment ? 'Изменить' : 'Отправить'?></button>
           
            </form>
            <?else:?>
            <p>Komment qoldirish uchun ro'yxatdan o'ting!!!</p>
            <?endif;?>
            <div class="comments">
                <?foreach ($allComments as $key => $value):  ?>
                <div class="comments__item">
                    <p class="comments__item-time"><?=$value['time']?></p>
                    <section class="comments__body">
                        <div class="comments__head">
                            <h2 class="comment__head-title"><?=$value['name']?></h2>
                            <img src="<?=$value['photo']?>" alt="" class="comments__head-img">
                        </div>
                        <p class="comments__body-descr"><?=$value['comment']?></p>
                        <div class="comments__footer">
                            <?= $value['changed'] ? "<p>Changed</p>" : null ?>
                            <?if($_SESSION['login'] == $value['login']):?>
                            <a href="?route=guest&change-id=<?=$value['id']?>" class="comments__footer-link"><i class="fal fa-edit"></i></a>
                            <a href="?route=guest&del-id=<?=$value['id']?>" class="comments__footer-link"><i class="fal fa-trash"></i></a>
                            <?endif;?>
                        </div>
                    </section>
                </div>
                <?endforeach;?>
            </div>
        </main>