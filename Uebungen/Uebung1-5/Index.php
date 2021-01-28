<!--<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername" required/>
    <label for="klasse">Choose a class:</label>
  <select name="klasse" id="klasse">
    <option value="D18a" name="klasse">D18a</option>
    <option value="D18b" name="klasse">D18b</option>
    <option value="D18c" name="klasse">D18c</option>
    <option value="D18d" name="klasse">D18d</option>
  </select>
    <input type="submit" value="Absenden"/>
</form>
-->
<?php
 /*   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $klasse = $_POST['klasse'];
        echo "Hallo {$username} aus der {$klasse}!";
    }*/
?>

<form method="POST" action="?">
    <label for="Zutat">Füge eine weitere Zutat hinzu:</label>
    <input type="text" name="zutat" placeholder="Zutat" required/>
</form>

<?php
    session_start();
    $items = array();

    if (isset($_SESSION['items'])) {
        $items = $_SESSION['items'];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newItem = $_POST['zutat'];
        array_push($items, $newItem);
    }

    echo 'Items on your pizza:<br>';
    foreach($items as $value){
        echo "{$value} <br>";
    };

    $_SESSION['items'] = $items;
?>