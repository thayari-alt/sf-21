<div class="knowledge">
  <h3>Операции PHP</h1>
  
  <?
    $rand = rand(1, 100);
    $min = rand(1, 50);
    $max = rand(51, 100);

    $a = rand(1, 100);
    $b = rand(1, 100);
  ?>
  
  <p>Число <?=$rand?><?echo ($rand >= $min && $rand <= $max) ? '' : ' не';?> находится между <?=$min?> и <?=$max?>.</p>

  <p><?=$a?> + <?=$b?> = <?echo $a + $b?></p>
  <p><?=$a?> – <?=$b?> = <?echo $a - $b?></p>
  <p><?=$a?> * <?=$b?> = <?echo $a * $b?></p>
  <p><?=$a?> / <?=$b?> = <?echo $a / $b?></p>
  <p><?=$a?> % <?=$b?> = <?echo $a % $b?></p>
  <p><?=$a?><sup><?=$b?></sup> = <?echo $a ** $b?></p>
</div>