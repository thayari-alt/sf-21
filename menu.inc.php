<nav class="nav-menu">
  <ul>
    <?
    foreach ($menuItems as $value) {
      echo '<li class="nav-menu_item"><a href="#">'.$value.'</a></li>';
    }
    ?>
  </ul>
</nav>