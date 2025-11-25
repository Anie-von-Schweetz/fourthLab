<?php	
	include 'header.html';
?>
<?php 
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $from=$_GET['from'];
    } else {
    $name = '';
    $email = '';
    $from = '';
}
?>

<main>
    <h2>Оставьте свой отзыв о получившейся свадьбе!</h2>
    <form id="guestForm" method="post" action="home.php">
            <label for="name">Ваши ФИО</label>
            <input type="text" name="name" value="<?php echo $name; ?>"><br>

            <label for="email">Ваша почта</label>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="example@mail.ru">

            <p><label>Откуда вы о нас узнали?</label></p>
            <p><input name="from" type="radio" value="internet" <?php echo ($from == 'internet') ? 'checked' : ''; ?>>Интернет</p>
            <p style="margin-bottom: 30px;"><input name="from" type="radio" value="friends" <?php echo ($from == 'friends') ? 'checked' : ''; ?>>Друзья/знакомые</p>

            <label for="category">Что бы вы хотели отправить?</label>
            <select name="category">
                <option selected disabled>Выберете ответ</option>
                <option value="complaint">Жалоба</option>
                <option value="propose">Предложение</option>
            </select>

            <p><label for="message">Текст вашего сообщения</label></p>
            <textarea name="message" rows="5" cols="40"></textarea>
            
            <p><label for="file">Прикрепите файл</label></p>
            <p style="margin-bottom: 30px;"><input name="file" type="file" accept=".pdf"></p>

            <p style="margin-bottom: 20px;"><input type="checkbox" name="agree" value="yes">Даю согласие на обработку персональных данных</p>

            <input type="submit" value="Отправить!">
        </main>
    </body>
</html>