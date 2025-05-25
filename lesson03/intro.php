<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>HTMLの基礎</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border-collapse: collapse;
            border: 1px solid #ccc;
            padding: 0.3rem;
        }

        td.price {
            text-align: right;
        }

        th {
            background: lemonchiffon;
        }

        td {
            background: aquamarine;
        }
    </style>
</head>

<body>
    <h1>HTMLの練習</h1>
    <p>プログラム言語は無数にある。最近人気の言語を以下に示す。</p>
    <ul>
        <li>Python</li>
        <li>C</li>
        <li>Java</li>
        <li>C++</li>
        <li>C#</li>
    </ul>
    <select name="pref">
        <option value="40">福岡県</option>
        <option value="41">佐賀県</option>
        <option value="42">長崎県</option>
        <option value="43">熊本県</option>
        <option value="44">大分県</option>
        <option value="45">宮崎県</option>
        <option value="46">鹿児島県</option>
        <option value="47">沖縄県</option>
    </select>
    <?php
    $prefs = [
        '40' => '福岡県',
        '41' => '佐賀県',
        '42' => '長崎県',
        '43' => '熊本県',
        '44' => '大分県',
        '45' => '宮崎県',
        '46' => '鹿児島県',
        '47' => '沖縄県'
    ];
    ?>
    <hr>
    <p>プログラムで作ったプルダウンメニュー</p>
    <select name="pref2">
        <?php foreach ($prefs as $code => $name) { ?>
            <option value="<?= $code ?>"><?= $name ?></option>
        <?php } ?>
    </select>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>費目</th>
                <th>メモ</th>
                <th>入金額</th>
                <th>出金額</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2023-04-03</td>
                <td>食費</td>
                <td>コーヒーを購入</td>
                <td class="price">0</td>
                <td class="price">380</td>
            </tr>
            <tr>
                <td>2023-04-10</td>
                <td>給料</td>
                <td>3月の給料</td>
                <td class="price">280000</td>
                <td class="price">0</td>
            </tr>
            <tr>
                <td>2023-04-11</td>
                <td>教養娯楽費</td>
                <td>書籍を購入</td>
                <td class="price">0</td>
                <td class="price">2800</td>
            </tr>
            <tr>
                <td>2023-04-14</td>
                <td>交際費</td>
                <td>同期会の会費</td>
                <td class="price">0</td>
                <td class="price">5000</td>
            </tr>
        </tbody>
    </table>
    <p>プログラムで作った表組</p>
    <?php
    $data = [
        ['日付' => '2023-04-03', '費目' => '食費', 'メモ' => 'コーヒーを購入', '入金額' => 0, '出金額' => 380],
        ['日付' => '2023-04-10', '費目' => '給料', 'メモ' => '3月の給料', '入金額' => 280000, '出金額' => 0],
        ['日付' => '2023-04-11', '費目' => '教養娯楽費', 'メモ' => '書籍を購入', '入金額' => 0, '出金額' => 2800],
        ['日付' => '2023-04-14', '費目' => '交際費', 'メモ' => '同期会の会費', '入金額' => 0, '出金額' => 5000],
    ];
    ?>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>費目</th>
                <th>メモ</th>
                <th>入金額</th>
                <th>出金額</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item) { ?>
                <tr>
                    <td><?= $item['日付'] ?></td>
                    <td><?= $item['費目'] ?></td>
                    <td><?= $item['メモ'] ?></td>
                    <td class="price"><?= $item['入金額'] ?></td>
                    <td class="price"><?= $item['出金額'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>