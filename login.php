<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
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
    <div class="container">
        
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
            <h2>ログインページ</h2>
            ユーザーメール<br>
            <input type="email" name="email" required><br>
            パスワード<br>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="ログイン">

        </form>
    </div>
</body>
<?php
     if($_SERVER["reQUEST_METHOD"] == "POST"){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_EMAIL);

        if(empty($email)){
            echo "メールを入力してください。";
        }
        elseif(empty($password)){
            echo "パスワードを入力してください。";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql ="INSERT INTO users (email, users_password) VALUES (:email, :users_password)";
        }
     }