<?php
    // 文字列型
    // 必ず''か""で囲う (このふたつの違いは後日)
    echo 'Hello world!';
    echo '<br>';

    // 文字同士を連結する
    // 連結には . を使用 (ドット)
    echo 'Shinya' . 'Hirai';
    echo '<br>';

    // 整数型
    // 四則演算
    echo 100 * 22;
    echo '<br>';
    // echo '100' * 22;
    // echo '<br>';

    // 変数 (最重要)
    // データを格納するための箱
    $name = 'Shinya Hirai'; // 定義
    echo $name; // 実行 (使用)
    echo '<br>';

    // 変数を使った文字連結
    $first_name = 'Shinya';
    $last_name = 'Hirai';
    echo $first_name . $last_name;
    // echo 'Shinya' . 'Hirai';
    echo '<br>';

    $full_name = $first_name . ' ' . $last_name;
    echo $full_name;
    echo '<br>';

    // 変数の上書き
    $full_name = 'hogehoge'; // 同じ変数名を使用して別の値を入れた場合
    echo $full_name;
    echo '<br>';

    // 制御文 - 条件分岐と繰り返し

    // 条件分岐
    // もしのび太くんのテストの点数が100点だったら..
    $exam_result = 100;

    if ($exam_result >= 60 && $exam_result <= 99) {
        echo 'のび太くんおめでとう!';
        echo '<br>';
    } elseif ($exam_result == 0) {
        echo 'もっと勉強頑張らないと！！ママに怒られるよ。。';
        echo '<br>';
    } elseif ($exam_result == 100) {
        echo 'よくやった！';
        echo '<br>';
    } else {
        echo 'いやのび太くん頑張ったよ！';
        echo '<br>';
    }

    if (10 != 10) {
        echo '等しくない';
        echo '<br>';
    }

    // switch文
    $dice = 3; // 6マスサイコロの目が入る
    switch ($dice) {
        case 1:
            echo '1マス進む';
            break; // 制御文の中にbreakを入れるとその行で制御文を強制終了

        case 2:
            echo '2マス進む';
            break;

        case 3:
            echo '1回休み';
            break;

        case 6:
            echo 'ゴール';
            break;

        default:
            echo '振り出しに戻る';
            break;
    }

    $var = 0;
    while ($var < 10) {
        echo $var . '<br>';
        // $var++; // 自己代入文
        $var = $var + 1;
    }


    // for文
    // 10回繰り返したい
    $num = 10;
    for ($i=0; $i < $num; $i++) {
        echo $i . '<br>';
    }

    // 配列 (array)
    $php = 'PHP';
    $html = 'HTMl';
    $css = 'CSS';

    $languages = array('PHP', 'HTML', 'CSS', 'MySQL', 'JavaScript');
    echo $languages[0];
    echo $languages[1];
    echo $languages[2];
    echo $languages[3];
    echo $languages[4];
    echo '<br>';
    echo '<br>';
    echo '<br>';


    // 友達データを繰り返し表示 - 配列とfor文
    $friends = array('Honoka', 'Mai', 'Ryohei', 'Ken', 'Motoki', 'Shuzo');

    // 配列データの件数を取得して変数に格納
    $friends_count = count($friends);
    // count(配列)で配列の要素数を数える
    echo $friends_count;
    echo '<br>';

    for ($i=0; $i < $friends_count; $i++) {
        echo $i;
        echo '<br>';
        echo $friends[$i]; // 配列のkeyには数値が入った変数を指定することができる
        echo '<br>';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    // foreach
    foreach ($friends as $friend) {
    // foreach (配列 as 変数) {
        // 変数を使用できる
    // }
        echo $friend;
        echo '<br>';
    }


    // 1 + 1 = 2

    // 1 + 1 == 2
    // 2 < 3
    // 8 >= 9

 ?>






