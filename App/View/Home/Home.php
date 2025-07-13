<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* Container da home */
  .home-container {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
  }

  /* Título da home */
  .home-title {
    font-size: 2rem;
    color: #ffffff;
    background-color: #202022;
    padding: 1rem 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
  }
</style>

  <?php include VIEWS . '/Includes/navbar.php' ?>

  <div class="home-container">
    <h1 class="home-title">Tela Inicial</h1>
  </div>

</body>

</html>