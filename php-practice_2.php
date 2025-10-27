<?php
// Q1 tic-tac問題
$i = 1;
while($i <= 100){
    if($i % 4 ===0 && $i % 5 === 0){
        echo "tic-tac\n";
        $i++;
        continue;
    }elseif ($i % 4 === 0) {
        echo "tic\n";
        $i++;
        continue;
    }elseif($i % 5 === 0){
        echo "tac\n";
        $i++;
        continue;
    }
    echo $i;
    echo "\n";
    $i++;
}

// Q2 多次元連想配列
//問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。","\n";

//問題2
foreach ($personalInfos as $index => $vals)
{
    var_dump($index);
    echo ($index + 1) .'番目の' . $vals['name'] . 'のメールアドレスは' . $vals['mail'] . 'で、電話番号は' . $vals['tel'] . 'です。';
    echo "\n";
    
}

//問題3
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222',
        'age'  => 25
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444',
        'age'  => 30
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666',
        'age'  => 18
    ],
];
foreach ($personalInfos as $index => $vals)
{
    var_dump($vals);
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;
    
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。' . "\n";
    }
}

$yamada = new Student(120 , '山田');
$yamada->attend();

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;
    
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend($lesson)
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。' . "\n";
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号:'. $this->studentId;
    }
}

$yamada = new Student(120 , '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$datetime = new Datetime('2021-02-02');
echo $datetime->format('Y-m-d');

// 問題2
$pastday = new DateTime('1992-04-25');
$today = new DateTime('2025-10-28');

$diff = $pastday->diff($today);

echo $diff->days;

?>