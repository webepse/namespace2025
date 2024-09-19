<?php 
    namespace App;
    use App\test\MyTest;
    require "class/Autoloader.php";
    Autoloader::register();

    $form = new Form([
        "username" => "Jordan",
        "password" => "test"
    ]);

    echo $form->input('username');
    echo $form->input('password','password');
    echo $form->submit();

    // $test = new \App\test\MyTest('Jordan');
    $test = new MyTest('Jordan');
    $test->crier();

?>