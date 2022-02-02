<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Scheduled Message System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p>
            <?php
                date_default_timezone_set('America/Toronto');
                $iDayOfTheWeek = date('w');
                switch($iDayOfTheWeek) {
                    case 1:
                        echo "Today is Monday!";
                        break;
                    case 2:
                        echo "Today is Tuesday!";
                        break;
                    case 3:
                        echo "Today is Wednesday!";
                        break;
                    case 4:
                        echo "Today is Thursday!";
                        break;
                    case 5:
                        echo "Today is Friday!";
                        break;
                    case 6:
                        echo "Today is Saturday!";
                        break;
                    case 7:
                        echo "Today is Sunday!";
                        break;
                }
            ?>
        </p>
    </body>
</html>