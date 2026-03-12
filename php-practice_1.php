<?php
// Q1 変数と文字列
<?php
$name = '犬塚';
echo '私の名前は ' . $name . ' です';

// Q2 四則演算
<?php
$num = 5 * 4;
echo $num;
echo $num / 2;

// Q3 日付操作
<?php
$time = date('Y-m-d H:i:s');
echo '現在時刻は、 ' . $time . ' です。';

// Q4 条件分岐-1 if文
<?php
$device = 'windows';
if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac') {
        echo '使用OSは、macです。';
    } else {
        echo 'どちらでもありません。';
    }
}

// Q5 条件分岐-2 三項演算子
<?php
$age = 18;
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;

// Q6 配列
<?php
$array = [
    '東京',
    '神奈川',
    '埼玉',
    '千葉',
    '栃木',
    '茨城',
    '群馬',
];
echo $array[4] . 'と' . $array[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>