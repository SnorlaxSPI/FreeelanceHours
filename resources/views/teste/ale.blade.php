<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste Blade</title>
</head>

<body>

  <?php echo 'Oi, Alessandro!'; ?>

  <p>

    <!-- Loop em PHP para gerar uma lista de números de 1 a 20 -->
    <?php foreach (range(1, 20) as $key): ?>
      <li><?php echo $key; ?></li>
    <?php endforeach; ?>

    <br>

    <!-- Loop em Blade para gerar uma lista de números de 1 a 20 -->
    @foreach (range(1, 20) as $key)
    <li>{{ $key }}</li>
    @endforeach

    @auth
    <span>Usuário autenticado</span>
    @endauth

</body>

</html>