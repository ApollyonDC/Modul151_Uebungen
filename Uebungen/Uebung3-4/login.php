<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="?" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
    </form>
</body>
</html>

<?PHP

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $db = DB::get();

    try {
        $db->startTransaction();

        $username = $_POST['username'];
        $password = $_POST['password'];

        $userList = $db->select("SELECT * FROM logins WHERE username = :username", [
            ':username' => $username
        ]);

        $user = $userList[0];

        $userPassword = $user['password'];

        if(password_verify($password, $userPassword)) {
            $_SESSION['userId'] = $user['id'];
        }
    }
    catch (\Exception $e) {
        $db->rollback();
        throw $e;
    }


}

INCLUDE 'db.php';
?>