<?php
    session_start();
    include "gallery-style-one.php";
    //dapatkan data user dari form register
    $admin = [
    	'email' => $_POST['email'],
    	'password' => $_POST['password'],
        'name' => $_POST['name'],
    	
    ];
    //validasi jika password & password_confirmation sama

    //check apakah user dengan username tersebut ada di table users
    $query = "select * from admin where name = ? limit 1";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('s', $admin['name']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);
    //jika username sudah ada, maka return kembali ke halaman register.
    if($row != null){
    	$_SESSION['error'] = 'Username yang anda masukkan sudah ada di database.';
    	header("Location: gallery-style-one.php");
    }else{
    	//username unik. simpan di database.
    	$query = "insert into admin(email, password, name) values  (?,?,?)";
    	$stmt = $mysqli->stmt_init();
    	$stmt->prepare($query);
    	$stmt->bind_param('sss', $admin['email'],$admin['password'],$admin['name']);
    	$stmt->execute();
    	$result = $stmt->get_result();
    	var_dump($result);
    	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
    	header("Location: gallery-style-one.php");
    }
    ?>