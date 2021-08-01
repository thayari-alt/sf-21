<?
$menuItems = array('Обо мне', 'Услуги', 'Портфолио', 'Контакты');

$greeting = 'Приветствую вас на тестовом сайте!';

$image = 'https://picsum.photos/400/300';


$randomPersonApi = file_get_contents('https://api.randomdatatools.ru/?params=FirstName,LastName,YearsOld,City');
$randomPersonData = json_decode($randomPersonApi, true);


include 'main.php';
?>

