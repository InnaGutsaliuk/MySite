<div class="content">
    <h1>Игра</h1>
    <form action="" method="post">
        <?php
        if(isset($_SESSION['client'], $_SESSION['server'])) {
            echo 'У Вас ' . $_SESSION['client'] . ' очков.<br>';
        echo 'У Компьютера ' . $_SESSION['server'] . ' очков.<br>'; ?>

        Введите число от 1 до 3:
        <input type="text" name="client"><br><br>
        <?php
            if(isset($server)) {
                echo 'Компьютер назвал число:  ' . $server . '<br>';
        }
        ?>
        <?php echo @$game_error; ?>
        <input type="submit" name="submit" value="Отправить"><br><br>
        <?php
        }else{ ?>
        <input type="submit" name="start" value="Начать игру"><br><br>
        <?php
        } ?>
    </form>
</div>