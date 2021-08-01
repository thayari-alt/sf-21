<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP модуль 21</title>
</head>
<body>
  
  <?include 'header.php'?>
  <main>
    <div class="container">
      <h1><?=$greeting?></h1>
      <div class="row">
        <img src="<?=$image;?>" alt="">
        <div class="info">
          <p>Меня зовут <strong><?echo $randomPersonData['FirstName'].' '.$randomPersonData['LastName'];?></strong></p>
          <p>Мне <?=$randomPersonData['YearsOld'];?>.</p>
          <p>Я из <?=$randomPersonData['City'];?>.</p>
        </div>
        <?include 'knowledge.inc.php';?>
      </div>
    </div>
  </main>
  <?include 'footer.php';?>
  
</body>
</html>