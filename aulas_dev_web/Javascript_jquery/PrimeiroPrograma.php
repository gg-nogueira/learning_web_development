<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Aprendendo PHP</title>
</head>
<body>
    <?php
        $frutas = ["maça", "banana", "abacaxi", "pera", "melancia", "uva"];
        $s      = "banana";
    ?>
    
    <form>
        <select name="frutas">
            <?php foreach ($frutas as $f) { ?>
                <option value="<?= $f; ?>"

                <?php if ($f==$s) { echo "selected"; } ?>>
                    <?= $f; ?>
                </option>
            <?php } ?>
        </select>    
    </form>
</body>
</html>