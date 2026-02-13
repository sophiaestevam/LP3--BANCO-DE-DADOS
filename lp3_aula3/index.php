<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>
    <h1>Aula 3</h1>

    <!--codigo com for e while (laço de repetição)-->
    <?php
        for($i = 0; $i < 10;$i+=2) {
            echo "$i <br>";
        }

        $x = 1;
       while ($x < 10){
        echo "$x <br>";
        $x +=2;
       }
    ?> 
    <!--Multiplos codigo-->
        <h4>Mútiplos de 3 entre 0  100</h4>
        <ul>
             <?php
       for($y= 3;$y< 100;$y+=3){
      ?>
            <li>Número: <?php echo $y;?></li>
        <?php }  ?>
 </ul>
 <!--Atividade-->
        <h5>Ordem decresente</h5>
        <p>
        <?php
         for($a = 100; $a > 1;$a-=5) {
            echo $a."<br>";
        }
      ?>
      ACABOU!! </p>
        <!--Atividade 2-->
        <h6>Media Aritmética</h6>
         <?php
         $soma = 0;
         $c= 0;
        
         for($b = 14; $b < 73;$b++) {
            echo $b."<br>";
            $soma = $soma += $b;
            $c++;
            $media = $soma /  $c;
        }
        echo $media."<br>";
      ?>

</body>
</html>