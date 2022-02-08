<?php
//echo $_POST['pokemon'];
if (strtolower($_POST['pokemon'])=='pikachu') {
    header('Location: ../view/recibir.php');
} else {
    header('Location: ../index.php');
}
?>