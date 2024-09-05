<?php

  const API_URL = 'https://www.whenisthenextmcufilm.com/api';
  #start new session of cURL; ch = cURL handle
  $ch = curl_init(API_URL);
  // denote we want the result of the petition but don't show it on the screen
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  /* Execute the petition
  and save the response
  */
  $response = curl_exec($ch);
  $data = json_decode($response, true);
  curl_close($ch);

  #var_dump($data);

  // another alternative is file_get_contents
  // $result = file_get_contents(API_URL); // if only wants to make a GET request to an API
?>

<head>
  <title>The next MCU movie</title>
    <!-- Centered viewport -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
  >
</head>

<main>
  <!-- <pre style="font-size: 8px; overflow: scroll; height: 250px;">
    <?php var_dump($data); ?>
  </pre> -->

  <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
      style="border-radius: 16px;" 
    >
  </section>

  <hgroup>
    <h3><?= $data["title"]; ?> releases in <?= $data["days_until"]; ?> days!</h3>
    <p>Release date: <?= $data["release_date"]; ?> </p>
    <p>Next movie: <?= $data["following_production"]["title"]; ?> </p>
  </hgroup>

</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }
</style>