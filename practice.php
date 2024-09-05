<?php
  $name = 'Miguel';
  $isDev = true;
  $age = 18;
  $amount = 300;

  define('LOGO_URL', 'https://www.php.net/images/logos/php-logo-white.svg');

  var_dump($name);
  var_dump($isDev);
  var_dump($age);

  echo gettype($name);
  echo gettype($isDev);
  echo gettype($age);

  var_export(is_string($name));
  var_export(is_bool($isDev));
  var_export(is_integer($age));

  const NOMBRE = 'Victor';

  $isOld = $age > 40;

  $outputAge = $isOld 
    ? 'Eres viejo, lo siento.'
    : 'Eres joven, felicidades.';


  $result = match(true) {
    $age <= 2 => "Eres un bebe, $name ",
    $age <= 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age <= 30 => "Eres un adulto joven, $name",
    default => "Eres un adulto, $name"
  };

  $bestLanguages = ['PHP', 'Javascript', 'Python'];
  $bestLanguages[] = 'Java';
  $bestLanguages[] = 'Typescript';

  $person = [
    "name" => 'Victor',
    "age" => 31,
    "isDev" => true,
    "languages" => ['PHP', 'Javascript', 'Typescript']
  ];
  
?>

<h3>
  El mejor lenguaje es <?= $bestLanguages[4] ?>
</h3>

<ul>
  <?php foreach($bestLanguages as $key => $language) : ?>
    <li><?= $key . " " . $language ?></li>
  <?php endforeach ;?>
</ul>

<h2><?= $outputAge ; ?></h2>
<h2><?= $result ; ?></h2>

<!-- <?php if($isOld) : ?>
  <h2>Eres viejo, los siento.</h2>
<?php elseif($isDev) : ?>
  <h2>No eres viejo pero eres dev.</h2>
<?php else : ?>
  <h2>Eres joven, felicidades.</h2>
<?php endif; ?> -->

<img src="<?= LOGO_URL ?>" alt="Logo php" width="200">
<h1>
  <?= 
    "Hola <br />" 
    . $name
    . " tienes $$amount para \"prestarme\"?";
  ?>
</h1>

<h2><?= NOMBRE ?></h2>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>