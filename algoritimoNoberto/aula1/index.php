<?php
  $result = [];
  if (count($result) <= 5){
    $contador = count($result) + 1;
    while ($contador <= 5) {
        $nota1 = (float) ($_POST["nota1_$contador"] ?? 0);
        $nota2 = (float) ($_POST["nota2_$contador"] ?? 0);
        $media = ($nota1 + $nota2) / 2;
        $result[] = "Aluno $contador - Media: $media";
        $contador++;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <fieldset>
                <legend>Aluno <?= $i ?></legend>
                <label>Nota 1: <input type="number" step="0.1" name="nota1_<?= $i ?>" required></label>
                <label>Nota 2: <input type="number" step="0.1" name="nota2_<?= $i ?>" required></label>
            </fieldset>
        <?php endfor; ?>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($result   && count($result) > 0): ?>
        <h2>Resultados</h2>
        <ul>
            <?php foreach ($result as $linha): ?>
                <li><?= htmlspecialchars($linha) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>