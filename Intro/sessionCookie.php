<?php
    session_start();

    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter']++;
    }

    $s = $_SESSION['counter'];

    echo "Hello, user. It's your $s visit";

    //----------------------

    var_dump($_COOKIE);
    setcookie('role', 'admin', time() + 60);
    echo $_COOKIE['role'];

    //------------------------

    class User {
        public $name;
        public $surname;
        public $email;
        public $role;
    }

    $user = new User;
    $user->name = 'Name';
    $user->surname = 'Surname';
    $user->email = 'Email';
    $user->role = 'Role';

    $data = serialize($user); // unserialize
    setcookie('user_php', $data, time() + 3600);

    $data_json = json_encode($user); // json_decode
    setcookie('user_json', $data_json, time() + 3600);

?>