<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>日本語単語を勉強ゲーム</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1 class="title"><a href="index.php" style="text-decoration: none; color: inherit;">日本語単語を勉強ゲームへようこそ！</a></h1>
        <img class="title-img" src="img/unnamed.jpg" alt="Japanese Study Game" width="100%" height="100px">
    </div>
    <nav class="navbar navbar-expand-md  bg-body-tertiary"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">日文單字練習</a>
            <div class="collapse navbar-collapse" id="navbar1">
                <label for="burger" style="cursor:pointer; position:absolute; right:10px; top:10px;">☰</label>
                <input type="checkbox" style="display:none;" id="burger">
                <ul>
                    <li><a class="nav-link" href="game.php">ゲームエリア</a></li>
                    <li><a class="nav-link" href="about.php">このサイトについて</a></li>
                    <li><a class="nav-link" href="login.php">ログイン</a></li>
                    <li><a class="nav-link" href="register.php">新規登録</a></li>
                </ul>
            </div>
        </div>        
    </nav>
</body>

<?php

/*
Create table adiminstrator(
    adiminstrator_id varchar(10) PRIMARY KEY,
    adiminstrator_name varchar(50) NOT NULL,
    adiminstrator_password varchar(255) NOT NULL,
    establish_time timestamp DEFAULT CURRENT_TIMESTAMP
);
create table users(
    users_id varchar(10) PRIMARY KEY,
    users_name varchar(50) NOT NULL,
    users_password varchar(255) NOT NULL,
    knickname varchar(50) ,
    points int DEFAULT 0,
    email varchar(100) UNIQUE NOT NULL,
    last_login_time datetime,
    establish_time timestamp DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE adiminstrator_users(
    adiminstrator_id varchar(10),
    users_id varchar(10),
    PRIMARY KEY(adiminstrator_id,users_id),
    FOREIGN KEY (adiminstrator_id) REFERENCES adiminstrator(adiminstrator_id)ON DELETE CASCADE, 
    FOREIGN KEY (users_id) REFERENCES users(users_id)ON DELETE CASCADE
);
*/
