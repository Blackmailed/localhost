<html>
    <head>
        <meta charset="UTF-8">
        <title>Таблица умножения</title>
        <style>
            .title{
                text-align: center;
                border-bottom: solid;
                padding-bottom: 20px;
                margin-bottom: 20px;
            }
            table {
            border-collapse: collapse;
            }
            td {
                border: 1px solid black;
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="title">
            <h1>
                Задание:
            </h1>
            <h2>
                Создайте php-скрипт, который формирует web-страницу с таблицей умножения
            </h2>
        </div>
        <table>
            <?php
            $rows = 10;
            $columns = 10;
            for ($i = 0; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $columns; $j++) {
                    if ($i === 0 && $j === 0) {
                        echo "<td>&nbsp;</td>";
                    } elseif ($i === 0) {
                        echo "<td>$j</td>";
                    } elseif ($j === 0) {
                        echo "<td>$i</td>";
                    } else {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>