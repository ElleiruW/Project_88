<?php 


// connecting database CarsRUs

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $make = $_POST['make'] ?? null;
    $model = $_POST['model'] ?? null;
    $year = $_POST['year'] ?? null;
    $colour = $_POST['colour'];
    if($make && $model && $year && $colour){
    	try {
			$connection = new PDO('mysql:host=localhost;dbname=CarsRUs','root');
		} catch (PDOException $e) {
			echo 'ERROR';
		}
 
        $sql="INSERT INTO cars(make, model, `year`, colour)  VALUES (:make, :model, :year, :colour)";
       	$statement = $connection->prepare($sql);
		$statement->bindValue('make', $make, PDO::PARAM_STR);
		$statement->bindValue('model', $model, PDO::PARAM_STR);
		$statement->bindValue('year', $year, PDO::PARAM_INT);
		$statement->bindValue('colour', $colour, PDO::PARAM_STR);
        if(!$statement->execute()){
			echo 'INSERT FAILED';
		}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Own Car</title>
</head>
<style>
.BASIC{
    background-color: lightgreen;
    border: 2px solid green;
    border-radius: 20px;
    padding: 5px;
    
}
.ENVOY{
    background-color: lightorange;
    border: 2px solid orange;
    border-radius: 20px;
    
}


</style>
<body>
    <div>
    
    <?php if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    
    ?>
        <form method="POST">
            <input class="BASIC" type="text" name="make placeholder="make">
            <input class="BASIC" type="text name="password" placeholder="model">
            <input class="BASIC" type="date" placeholder="year">
            <input class="BASIC" type="text" name="color" placeholder="colour">
            <input class="ENVOY" type="submit">
            <input class="ENVOY" type="reset">
        </form>
    </div>
	<button type="button" id="reg"><a href="home.php">HOME</a></button>							<!-- ensure good navigation-->
</body>
</html>        