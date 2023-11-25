<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant</title>
  <link rel="stylesheet" type="text/css" href="link.html">
  <style>
    body {
      background-color: #fff2e5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #7c0000;
      color: white;
      text-align: center;
      padding: 10px;
    }

    .restaurant-container {
      width: 80%;
      margin: 20px auto;
    }

    .restaurant-title {
      color: #7c0000;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .restaurant-description {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Chia thành 2 cột bằng nhau */
      gap: 20px; /* Khoảng cách giữa các ô */
    }

    .restaurant-info {
      width: 100%; /* Chắc chắn ô rộng 100% để tránh mất đối tượng con */
      position: relative;
    }

    .restaurant-info img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px; /* Bo tròn góc */
    }

    .restaurant-timings {
      margin-top: 20px;
    }

    .restaurant-timings table {
      width: 100%;
      text-align: center;
    }

    .restaurant-timings td {
      padding: 10px;
    }

    .restaurant-timings td:first-child {
      font-weight: bold;
      color: #7c0000;
    }
  </style>
</head>
<body>
  <?php include "index1.php"; ?>

  <header>
    <h1>RESTAURANT</h1>
  </header>

  <div class="restaurant-container">
    <div class="restaurant-title">Restaurant: Sessions</div>

    <div class="restaurant-description">
      <div class="restaurant-info">
        <a href="#" target="_blank"><img src="image/dining3.jpg" alt="Dining 3"></a>
        
      </div>

      <div class="restaurant-info">
        <a href="#" target="_blank"><img src="image/dining2.jpg" alt="Dining 2"></a>
      </div>
	  <div class="restaurant-info">
        <a href="#" target="_blank"><img src="image/dining1.jpg" alt="Dining 2"></a>
      </div>
	  <div class="restaurant-info">
        <a href="#" target="_blank"><img src="image/delicacy.jpg" alt="Dining 2"></a>
      </div>
    </div>
	<p>
          Internationally styled restaurants in Rajkot, providing you a thoroughly restful serving you the
          Sessions of the word with some of the most impressive food. Sessions introduces a new concept in
          cuisine to spice up your food life with a restaurant for family, lunch, and entertainment.
        </p>
	<div class="restaurant-title">TIMING</div>
    <div class="restaurant-timings">
      <table>
        <tr>
          <td>Lunch:</td>
          <td>12:00 to 15:30 hours</td>
        </tr>
        <tr>
          <td>Dinner:</td>
          <td>19:00 to 23:30 hours</td>
        </tr>
        <tr>
          <td>Sitting style</td>
          <td>Cuisine</td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
