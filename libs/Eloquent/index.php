<?php
require('init.php');
$ids = [14, 26,15 ,30];
$users = User::getStrangeUsers($ids);

?>
<table>
    <tr>
        <th>ID пользователя</th>
        <th>Имя пользователя</th>
        <th>Управление</th>
    </tr>
    <?php    foreach($users as $user) :    ?>
        <tr>
            <td><a href="show.php?id=<?= $user->id; ?>"><?=$user->id?></a></td>
            <td><a href="show.php?id=<?= $user->id; ?>"><?=$user->name?></a></td>
            <td>
                <a href="edit.php?id=<?= $user->id; ?>">edit</a>
                <a href="delete.php?id=<?= $user->id; ?>">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
