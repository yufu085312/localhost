<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
            <title></title>
        </meta>
    </head>
    <body>
        <?php

            //1~10までのループ
            for ($cnt = 1; $cnt <= 10; $cnt++) {
                print $cnt;
                switch ($cnt) {
                    case 1:
                        print "★";
                    case 2:
                        print "☆";
                    case 3:
                        print "🔴";
                    case 4:
                        print "⚪︎";
                    default:
                        print "✖︎";
                        break;
                }
                print "<br>";
            }
        ?>
    </body>
</html>