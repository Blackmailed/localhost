<html>
    <head>
        <meta charset="UTF-8">
        <title>Палитра цветов</title>
        <style>
            .title{
                text-align: center;
                border-bottom: solid;
                padding-bottom: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="title">
            <h1>
                Задание:
            </h1>
            <h2>
                Создайте php-скрипт, который создает страницу с таблицей возможных цветов
                HTML. В теле цикла с произвольным шагом(чтобы всю палитру не
                распечатывать) выводить текст, содержащий код цвета. Цвет текста задавать
                этим же кодом.
            </h2>
        </div>
        <table>
            <?php
            $step = 60;
            $red = 0;
            $green = 0;
            $blue = 0;
            while ($red <= 255) {
                echo "<tr>";
                while ($green <= 255) {
                    while ($blue <= 255) {
                        echo "<td style='color: rgb($red, $green, $blue);'>";
                        echo "<span style='background-color: rgb($red, $green, $blue);'>&nbsp;&nbsp;&nbsp;</span>";
                        echo "rgb($red, $green, $blue)";
                        echo "</td>";
                        $blue += $step;
                    }
                    $blue = 0;
                    $green += $step;
                }
                $green = 0;
                $red += $step;
            }
            ?>
        </table>
    </body>
</html>