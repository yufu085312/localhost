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
                //変数値が5以下なら🔴マークを、
                //そうでなければ🔻マークを追加
                print ($cnt <= 5) ? "🔴" : "🔻";
                print "<br>";
            }
        ?>
    </body>
</html>