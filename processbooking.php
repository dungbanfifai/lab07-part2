<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Confirmation</title>
</head>

<body>
  <h1>Rohirrim Tour Booking Confirmation</h1>
  <?php
  if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
    echo "<p>Welcome {$_POST['firstname']} {$_POST['lastname']} !<p>";
  }

  $trips_name = [
    "4day" => "Four-day tour",
    "10day" => "Ten-day tour"
  ];

  $trips = [];
  if (isset($_POST["accom"])) {
    $trips[] = $_POST["accom"];
  }

  if (isset($_POST["4day"])) {
    $trips[] = $_POST["4day"];
  }

  if (isset($_POST["10day"])) {
    $trips[] = $_POST["10day"];
  }

  if (count($trips) > 0) {
    foreach ($trips as &$trip) {
      $trip = $trips_name[$trip] ?? $trip;
      unset($trip);
    }
  }

  echo "You are now booked on the ";
  echo implode(" and ", $trips);
  echo "<br>";

  if (isset($_POST["species"])) {
    $species_name = [
      "M" => "Human",
      "D" => "Dwarf",
      "E" => "Elf",
      "H" => "Hobbit"
    ];

    $species = $_POST["species"];

    echo "<p>Species: {$species_name[$species]}<p>";
  }

  if (isset($_POST["age"])) {
    echo "<p>Age: {$_POST['age']}<p>";
  }

  if (isset($_POST["food"])) {
    echo "<p>Meal Preference: {$_POST['food']}<p>";
  }

  if (isset($_POST["partysize"])) {
    echo "<p>Number of travellers: {$_POST['partysize']}<p>";
  }
  ?>
</body>

</html>