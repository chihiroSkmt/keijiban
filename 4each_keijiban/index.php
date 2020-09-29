<!doctype html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=chihiro;host=localhost;","root","root");
        $stmt = $pdo->query("select * from 4each_keijiban");
        
        ?>
        
        <img src="4eachblog_logo.jpg">
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        
        <main>
            
            <div class="main_left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <p>ハンドルネーム</p>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>
                    <div>
                        <p>タイトル</p>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    <div>
                        <p>コメント</p>
                        <textarea cols="80" rows="7" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
                
                <?php
                while($row = $stmt->fetch()) {
                    echo "<div class='kigi'>";
                    echo "<h2>".$row['title']."</h2>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="main_right">
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディダ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>javaScript</li>
                </ul>
            </div>
        </main>
        
        <footer>
            <div class="foot_mozi">
            copyright ©︎ internous
            <p>4each blog the which provides A to Z about programming.</p>
            </div>
        </footer>
        
    </body>
    
</html>