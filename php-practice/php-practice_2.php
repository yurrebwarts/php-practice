<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";

for ($i = 1; $i <= 100; $i++) {

    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
//Q2問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

//Q2問題2
foreach ($personalInfos as $i => $personalInfo) {
    echo ($i + 1) . "番目の" . $personalInfo['name'] . "のメールアドレスは" . $personalInfo['mail'] . "で、電話番号は" . $personalInfo['tel'] . "です。\n";
}

//Q2問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $i => $personalInfo) {
    $personalInfos[$i]['age'] = $ageList[$i];
}

var_dump($personalInfos);



// Q3 オブジェクト-1
$student = new Student(120, "山田");

echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。";


// Q4 オブジェクト-2
public function attend($subject)
{
    echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
}

// Q5 定義済みクラス
//Q5問題1
$date = new DateTime();
$date->modify('-1 month');

echo $date->format('Y-m-d');

//Q5問題2
$today = new DateTime();
$birthday = new DateTime('1992-04-25');

$diff = $birthday->diff($today);

echo 'あの日から' . $diff->days . '日経過しました。';



?>