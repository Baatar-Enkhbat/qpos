<?php

$utas = addslashes($_POST['utas']);
$pass = addslashes($_POST['pass']);

$info = $db->row("select * from users where utas='$utas' and pass=md5('$pass')");

if ($info != null) {
    // login success
    echo "success";
    dd($info);
    $_SESSION['id'] = $info['id'];
    $_SESSION['ner'] = $info['ner'];
    $_SESSION['utas'] = $info['utas'];
    $_SESSION['turul'] = $info['turul'];
    // $_SESSION['status'] = $info['status'];
    header('Location: home');
} else {
    // login fail
    $_SESSION['message'] = 'Таны оруулсан мэдээлэ буруу байна. Дахин оролдоно уу';
    header('Location: /');
}
