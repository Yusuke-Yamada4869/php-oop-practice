<!DOCTYPE html>
<html_lang="ja">
    <head>
        <mate charset="UTF=8">
        <title>ユーザー管理プログラム</title>
    </head>
    <style>
    </style>
    <body>
        <h1>ユーザー管理プログラム</h1>

    <?php
    class User {
        public $name;
        public $age;
    
    public function __constract($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

public function introduce() {
    echo "こんにちは、私は｛$this->name}です。 {$this->age}歳です。<br>";
}

pubulic function isadult() {
    return $this->age >= 18;
}
echo "<h2>ユーザー管理プログラム</h2>";

$user1 = new user("田中太郎", 25);
$user2 = new user("佐藤花子", 17);
$user3 = new user("鈴木一郎", 30);

echo "<h3>自己紹介</h3>";
if ($user->isadult()){
    echo "{$user->name1}さんは成人です<br>";
    } else {
       echo "{$user->name1}さんは未成年です。<br>";
    }

if ($user->isadult()){
    echo "{$user->name2}さんは成人です。<br>";
} else {
    echo "{$user->name2}さんは未成年です。<br>";
}

if ($user->isadult()){
    echo "{$user->name3}は成人です。<b>";
} else {
    echo "{$user->name3}は未成年です。<br>";
}
?>
</body>
</html>
