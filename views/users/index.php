<h1>Список пользователей</h1>
<?php foreach($data['users'] as $key => $user) : ?>
    <li><a href="/users/show/<?=$key?>"><?=$user?></a> <a href="#">Удалить</a></li>
<?php endforeach; ?>

