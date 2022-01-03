<?php

require '../templates/header.php';

$userId = $_GET['id'];//входной параметр из строки браузера

$query = "SELECT * FROM users WHERE id = :id";//select с одним параметром
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $userId,
]);
$user = $res->fetch();//один результат
if ($user) {
    echo "найден пользователь {$user['login']}";



$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();//все результаты

if (isset($_SESSION['error'])) {
    echo 
    "
    <div class='alert alert-danger text-center' role='alert'>
        {$_SESSION['error']}
    </div>
    ";
    unset($_SESSION['error']);
} else if (isset($_SESSION['success'])) {//если ключ существует
    echo 
    "
    <div id='alertSuccess' class='alert alert-success text-center' role='alert'>
        Данные успешно обновлены!
    </div>
    ";
    unset($_SESSION['success']);//удаление ключа из сессии
}

?>
<form method = "POST" action = "../actions/update_user.php">
<label>Имя</label>
            <input name='id' hidden value='<?=$user['id']?>'>
            <input class="form-control mb-2" name='name' value='<?=$user['name']?>'>
            <label>Логин</label>
            <input class="form-control mb-2" name='login' value='<?=$user['login']?>'>
            <select class="form-control mb-2" name="city_id">
                <?php
                    if (!$user['city_id']) {
                        echo '<option selected disabled>-- Выберите город --</option>';
                    }
                    foreach ($cities as $city) {
                        $selected = $city['id'] == $user['city_id'] ? 'selected' : '';
                        echo "<option $selected value='{$city['id']}'>{$city['name']}</option>";
                    }
                ?>
            </select>
            <button type='submit' class="btn btn-success w-100">СОХРАНИТЬ</button>
</form>

<?php
}else {
    echo '
    <div class="alert alert-warning" role="alert">
                Пользователь не найден
            </div>
    ';
}
?>

 <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#alertSuccess').fadeOut()
            }, 3000)
        })
    </script>
 <?php
 require '../templates/footer.php';