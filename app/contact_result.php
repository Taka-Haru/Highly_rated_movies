<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>HighlyRatedMovies</title>
</head>
  <body>

    <?php
    //URLで直接アクセスした場合のエラー処理
    if(empty($_POST['mode'])){
        echo 'アクセスルートが不正です。最初からやり直してください。<br>';
    }elseif($_POST['mode'] == 'RESULT'){
        ?>
        <h3>送信結果</h3><br>
        <?php
        session_start();
        echo 'お名前：' . $_SESSION['name'] . "<br>";
        echo 'メールアドレス：' . $_SESSION['mail_address'] . "<br>";
        echo 'お問い合わせ内容：' . $_SESSION['contact_contents'] . "<br>" . "<br>";
        echo '上記の内容で送信しました。<br>';
    }
    echo return_top(); ?><br>
    <a href="<?php echo CONTACT; ?>">お問い合わせ</a>
  </body>
</html>
