<?php
class Car 
{
	public $id;
	public $name;
	public $make;
	public $style;
	public $price;
	public $img;
	public $mileage;
	public $fuel;
	public $co2;
	public $engine;
	public $power;
	public $torque;
	public $drive;
	public $consumption;
	public $doors;
	public $acceleration;
	public $gearbox;
	public $weight;
	public $images;
}

function createCar($id, $name, $make, $style, $price, $img, $mileage, $fuel, $co2, $engine, $power, $torque, $drive,
$consumption, $doors, $acceleration, $gearbox, $weight, $images)
{
	$car = new Car();

	$car->id = $id;
	$car->name = $name;
	$car->make = $make;
	$car->style = $style;
	$car->price = $price;
	$car->img = $img;
	$car->mileage = $mileage;
	$car->fuel = $fuel;
	$car->co2 = $co2;
	$car->engine = $engine;
	$car->power = $power;
	$car->torque = $torque;
	$car->drive = $drive;
	$car->consumption = $consumption;
	$car->doors = $doors;
	$car->acceleration = $acceleration;
	$car->gearbox = $gearbox;
	$car->weight = $weight;
	$car->images = $images;

	return $car;
}

function getQuery($base, $parameters)
{
	$sql = $base;

	if(isset($parameters))
	{
		$condition = " WHERE";

		foreach($parameters as $key => $value)
		{
			$condition .= ' ' . $key . '="' . $value . '" AND';
		}

		if($condition == " WHERE")
		{
			$condition = "";
		}

		if(substr($condition, -3) == "AND")
		{
			$condition = substr($condition, strlen($condition) - 3);
		}

		$sql .= $condition;
	}

	return $sql;
}

function getAllCars($parameters)
{
	$servername = "localhost";
	$username = "ruioliveira02";
	$password = "Pd56E2coYtQFTa3a";
	$db = "CarDealer";

	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = getQuery("SELECT * FROM CARS", $parameters);

	$result = $conn->query($sql);

	$carList = [];

	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			array_push($carList, createCar($row["id"], $row["name"], $row["make"], $row["style"], $row["price"], $row["img"],
			 $row["mileage"], $row["fuel"], $row["co2"],$row["engine"], $row["power"], $row["torque"], $row["drive"], 
			 $row["consumption"], $row["doors"], $row["acceleration"], $row["gearbox"], $row["weight"], ""));
		}
	} 
	$conn->close();

	return $carList;
}

function getCar($id)
{
	$servername = "localhost";
	$username = "ruioliveira02";
	$password = "Pd56E2coYtQFTa3a";
	$db = "CarDealer";

	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM CARS WHERE ID=" . $id;

	$result = $conn->query($sql);

	$car = new Car();

	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$car = createCar($row["id"], $row["name"], $row["make"], $row["style"], $row["price"], $row["img"],
			$row["mileage"], $row["fuel"], $row["co2"],$row["engine"], $row["power"], $row["torque"], $row["drive"], 
			$row["consumption"], $row["doors"], $row["acceleration"], $row["gearbox"], $row["weight"], "");
		}
	} 

	$sql = "SELECT * FROM IMAGES WHERE CARID=" . $id;
	$result = $conn->query($sql);

	$car->images = [];

	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			array_push($car->images, $row["path"]);
		}
	} 

	$conn->close();

	return $car;
}

?>