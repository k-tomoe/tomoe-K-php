<?php
// 下記ファイルを読み込む指示
require_once("functions/search_city_time.php");
// 東京の時間を表示する
$tokyo = searchCityTime("東京");
// 送信されたcityのデータを取得する
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">

    <title>Document</title>
</head>

<body>
    <header class="header">

        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">World Clock</a>
        </div>

    </header>

    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">

                    <div class="result-card__img-wrapper">
                        <!-- 東京のimgを表示 -->
                        <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                    </div>

                    <div class="result-card__body">
                        <!-- "東京"を表示 -->
                        <p class="result-card__citty"><?php echo $tokyo['name']?></p>
                        <!-- 東京の時間を表示 -->
                        <p class="result-card__time"><?php echo $tokyo['time']?></p>
                    </div>

                </div>

                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <!-- cityの国旗を表示 -->
                        <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>

                    <div class="result-card__body">
                        <!-- cityの表記を表示 -->
                        <p class="result-card__city"><?php echo $comparison['name']?></p>
                        <!-- cityの時間を表示 -->
                        <p class="result-card__time"><?php echo $comparison['time']?></p>
                    </div>

                </div>

            </div>

        </div>
    </main>


</body>

</html>