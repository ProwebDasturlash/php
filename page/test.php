
        <main class="main">
            <?
            $name = 'Sanjar';
            echo $name . ' hello';

            ?>
            <br>
            <br>
            <br>
            <?

            if ($name == 'Sanjar') {
                echo 'hello teacher';
            } else {
                echo 'hello student';
            }
            for ($i = 1; $i <= 6; $i++) {
                echo "<h$i class='title'>$name</h$i>";
            }
            ?>


            <br>
            <br>


            <select name="" id="">
                <? for ($i = 10; $i <= 100; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <? } ?>
            </select>
            <br>
            <br>

            <?
            date_default_timezone_set('Asia/Tashkent');
            echo date('H:i');
            ?>
            <br>
            <?
            $arr = ['Shoxrux', 'Ilyos', 'Ismoil', 'Dilnoza'];
            for ($i = 0; $i < count($arr); $i++) {
                echo "<p>$i => $arr[$i]</p>";
            }
            var_dump($arr)
            ?>

            <br>
            <br>
            <?
            $arr_assoc = [
                'user-1' => 'Shoxrux',
                'user-2' => 'Ilyos',
                'user-3' => 'Ismoil',
                'user-4' => 'Dilnoza'
            ];
            ?>
            <select name="" id="">
                <? foreach ($arr_assoc as $key => $value) : ?>
                    <option value=""><?= $value ?></option>
                <? endforeach; ?>
            </select>

            <br><br><br>
            <?
            $hash = 'parol2020carona';
            echo password_hash($hash, CRYPT_BLOWFISH);


            ?>




        </main>