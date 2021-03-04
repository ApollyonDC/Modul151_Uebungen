<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

</body>
</html>

<?PHP

if(isset($_SESSION['userId'])){

    $db = DB::get();

    try {
        $db->startTransaction();

        echo xyz;
    }
    catch (\Exception $e) {
        $db->rollback();
        throw $e;
    }


}

INCLUDE 'db.php';
?>