<?php
// Q1 変数と文字列
<?php
$name = "安藤";
echo "私の名前は「{$name}」です。";
?>

// Q2 四則演算
<?php
$num = 5*4;
echo "$num \n";
echo $num/2;
?>

// Q3 日付操作
<?php
echo date("現在時刻は、Y年m月d日 H時i分s秒です。");
?>

// Q4 条件分岐-1 if文
<?php
$device = "mac";
if ($device === "mac" || $device === "windows") {
    echo "使用OSは、{$device}です。";
} else {
    echo "どちらでもありません。";
}
?>

// Q5 条件分岐-2 三項演算子
<?php
$age = 20;
$message = ($age > 18) ? "成人です。" : "未成年です。";
echo $message;
?>

// Q6 配列
<?php
$city = ["茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県"];
echo "{$city[2] }と{$city[3]}は関東地方の都道府県です。";
?>

// Q7 連想配列-1
<?php
$city = array(
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
    );

foreach ($city as $key =>$vals){
    echo $vals . "\n";
}
?>

// Q8 連想配列-2
<?php
$city = "神奈川県";
if($city === "東京都" || $city === "千葉県" || $city === "埼玉県" || $city === "群馬県" || $city === "茨城県" || $city === "栃木県" || $city === "神奈川県"){
    echo "{$city}の県庁所在地は、{$vals}です。";
}
?>

// Q9 連想配列-3
// わからない

// Q10 関数-1
<?php
function hello($name = '金谷')
{
    echo $name . 'さん、こんにちは。';
}

hello();
?>

<?php
function hello($name = '安藤')
{
    echo $name . 'さん、こんにちは。';
}

hello();
?>

// Q11 関数-2
<?php
function calcTaxInPrice($taxInPrice)
{
    echo $taxInPrice * 1.1;
}

$price = 1000; 
echo $price . '円の商品の税込価格は' . calcTaxInPrice($price) . 'です。';
?>

// Q12 関数とif文
<?php
function distinguishNum($number){
    if ($number % 2 === 0){
        return true;
    }else {
        return false;
    }
}

$number = 24;
if (distinguishNum($number)) {
    echo "{$number}は偶数です。";
}else {
    echo "{$number}は奇数です。";
}
?>

// Q13 関数とswitch文
<?php
function evaluateGrade($grade){
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
            break;
        
        case 'C':
            return "合格ですが追加課題があります。";
            break;
            
        case 'D':
            return "不合格です。";
            break;
            
        default:
            return "判定不明です。講師に問い合わせてください。";
            break;
    }
}

$grade = 'F';
echo evaluateGrade($grade);
?>