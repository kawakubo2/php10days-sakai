/*
CREATE DATABASE sukkiri3_sakai;
*/

CREATE TABLE 家計簿(
    日付 DATE,
    費目 VARCHAR(100),
    メモ VARCHAR(255),
    入金額 INT,
    出金額 INT
);

DELETE FROM 家計簿;

SELECT * 
FROM 家計簿;
UPDATE 家計簿
SET 入金額 = 280000, 出金額 = 0
WHERE 日付 = '2022-02-10';

-- 登録方法1(列を指定する方法)
INSERT INTO 家計簿(日付, 費目, メモ, 入金額, 出金額)
VALUES('2022-02-03', '食費', 'コーヒーを購入', 0, 380);

-- 登録方法2(例を省略する方法)
INSERT INTO 家計簿
VALUES('2022-02-10', '給料', '1月の給料', 280000, 0);

-- 登録方法3(バルクインサート)
INSERT INTO 家計簿
VALUES
('2022-02-11', '教養娯楽費', '書籍を購入', 0, 2800),
('2022-02-14', '交際費', '同期会の会費', 0, 5000),
('2022-02-20', '水道光熱費', '1月の電気代', 0, 7560);

SELECT 日付, 費目, メモ, 入金額, 出金額
FROM 家計簿;

SELECT *
FROM 家計簿;

SELECT メモ, 費目, 出金額, 日付
FROM 家計簿;

SELECT 日付, 費目, 出金額
FROM 家計簿
WHERE 出金額 > 3000;

INSERT INTO 家計簿
VALUES('2022-02-25', '居住費', '3月の家賃', 0, 85000);

UPDATE 家計簿
SET 出金額 = 90000
WHERE 日付 = '2022-02-25';

DELETE FROM 家計簿
WHERE 日付 = '2022-02-25';

/*
データ操作言語(Data Manipulation Language(DML))
    SELECT, INSERT, UPDATE, DELETE

データ定義言語(Data Definition Language(DDL))
    CREATE ALTER DROP
*/

SELECT * FROM 家計簿
WHERE 入金額 = 50000;

DELETE FROM 家計簿
WHERE 出金額 > 4000;

SELECT * FROM 家計簿;

UPDATE 家計簿
SET メモ = 'カフェラテを購入'
WHERE 日付 = '2022-02-03';

SELECT 費目 AS ITEM, 入金額 AS RECEIVE, 出金額 AS PAY
FROM 家計簿 AS MONEYBOOK
WHERE 費目 = '給料';

INSERT INTO 家計簿(費目, 日付, 出金額)
VALUES('通信費', '2022-02-20', 6200);

SELECT * FROM 家計簿;

CREATE TABLE 都道府県(
    コード CHAR(2),
    地域 VARCHAR(10),
    都道府県名 VARCHAR(10),
    県庁所在地 VARCHAR(20),
    面積 INT
);

LOAD DATA INFILE 'c:/temp/pref3.txt'
INTO TABLE 都道府県
CHARACTER SET sjis
LINES TERMINATED BY '\r\n';

SELECT * FROM 都道府県;

INSERT INTO 都道府県(コード, 地域, 都道府県名, 面積)
VALUES('26', '近畿', '京都', 4613);

INSERT INTO 都道府県
VALUES('37', '四国', '香川', '高松', 1876);

INSERT INTO 都道府県(コード, 都道府県名, 県庁所在地)
VALUES('40', '福岡', '福岡');

UPDATE 都道府県
SET 県庁所在地 = '京都'
WHERE コード = '26';

UPDATE 都道府県
SET 地域 = '九州', 面積 = 4976
WHERE コード = '40';

DELETE FROM 都道府県
WHERE コード = '26';

SELECT *
FROM 家計簿
WHERE 入金額 IS NULL;

SELECT *
FROM 家計簿
WHERE メモ IS NOT NULL;

SHOW TABLES;

SELECT *
FROM 家計簿
WHERE メモ LIKE '%1月%';

CREATE TABLE 湊くんの買い物リスト(
    カテゴリ varchar(10),
    名称 varchar(50),
    販売店 char(1),
    価格 INT
);

load data infile 'C:/temp/minato3.txt'
into table 湊くんの買い物リスト
CHARACTER SELECT sjis
lines terminated by '\r\n';

SELECT *
FROM 湊くんの買い物リスト;

UPDATE 湊くんの買い物リスト
SET 価格 = 6200
WHERE
    名称 = 'スッキリ勇者クエスト'
    AND
    販売店 = 'B';

SELECT *
FROM 湊くんの買い物リスト
WHERE
    (販売店 = 'A' OR 販売店 = 'B')
    AND
    (カテゴリ = 'DVD' OR カテゴリ = 'ゲーム');

create table vegetables(
    id int not null auto_increment,
    en_name varchar(255) not null,
    ja_name varchar(255) not null,
    primary key(id)
);

INSERT INTO VEGETABLES(en_name, ja_name)
VALUES
('potato', 'じゃがいも'),
('cucumber', 'きゅうり'),
('pumpkin', 'かぼちゃ');

SELECT *
FROM vegetables;

CREATE TABLE 気象観測(
    月 int,
    降水量 int,
    最高気温 int,
    最低気温 int,
    湿度 int
);

LOAD DATA INFILE 'c:/temp/kisho3.txt'
INTO TABLE 気象観測
CHARACTER SET sjis
LINES TERMINATED BY '\r\n';

SELECT * FROM 気象観測;

SELECT *
FROM 気象観測
WHERE 月 = 6;

SELECT *
FROM 気象観測
WHERE 月 <> 6;

SELECT *
FROM 気象観測
WHERE 月 != 6;

SELECT *
FROM 気象観測
WHERE NOT 月 = 6;

SELECT *
FROM 気象観測
WHERE 降水量 < 100;

SELECT *
FROM 気象観測
WHERE 降水量 > 200;

SELECT *
FROM 気象観測
WHERE 最高気温 >= 30;

SELECT *
FROM 気象観測
WHERE 最低気温 <= 0;

SELECT * FROM 気象観測 WHERE 月 IN (3, 5, 7);

SELET *
FROM 気象観測
WHERE
    月 = 3
    OR
    月 = 5
    OR
    月 = 7;

SELECT *
FROM 気象観測
WHERE 月 NOT IN (3, 5, 7);

SELECT *
FROM 気象観測
WHERE
    月 <> 3
    AND
    月 <> 5
    AND
    月 <> 7;

SELECT * FROM 都道府県;

CREATE TABLE 成績表(
    学籍番号 CHAR(4),
    学生名 VARCHAR(20),
    法学 INT,
    経済学 INT,
    哲学 INT,
    情報理論 INT,
    外国語 INT,
    総合成績 CHAR(1)
);

DELETE FROM 成績表;

load data infile 'c:/temp/seiseki3.txt'
into table 成績表
character set sjis
lines terminated by '\r\n';

SELECT *
FROM 成績表;

INSERT INTO 成績表
VALUES
('S001', '織田　信長', 77, 55, 80, 75, 93, null),
('A002', '豊臣　秀吉', 64, 69, 70,  0, 59, null),
('E003', '徳川　家康', 80, 83, 85, 90, 79, null);

UPDATE 成績表
SET 法学 = 85, 哲学 = 67
WHERE 学籍番号 = 'S001';

UPDATE 成績表
SET 外国語 = 81
WHERE 学籍番号 IN ('A002', 'E003');

SELECT * FROM 成績表;

UPDATE 成績表
SET 総合成績 = 'A'
WHERE
    法学 >= 80 AND 経済学 >= 80 AND 哲学 >= 80 AND 情報理論 >=80 AND 外国語 >= 80;

UPDATE 成績表
SET 総合成績 = 'B'
WHERE
    (法学 >= 80 OR 外国語 >= 80) AND (経済学 >= 80 OR 哲学 >= 80) AND 総合成績 IS NULL;

UPDATE 成績表
SET 総合成績 = 'D'
WHERE
    法学 < 50 AND 経済学 < 50 AND 哲学 < 50 AND 情報理論 < 50 AND 外国語 < 50;

UPDATE 成績表
SET 総合成績 = 'C'
WHERE 総合成績 IS NULL;

DELETE FROM 成績表
WHERE
    法学 = 0 OR 経済学 = 0 OR 哲学 = 0 OR 情報理論 = 0 OR 外国語 = 0;

UPDATE 成績表
SET 総合成績 =
    CASE 
        WHEN 法学 >= 80 AND 経済学 >= 80 AND 哲学 >= 80 AND 情報理論 >=80 AND 外国語 >= 80 THEN 'A'
        WHEN (法学 >= 80 OR 外国語 >= 80) AND (経済学 >= 80 OR 哲学 >= 80)                THEN 'B'
        WHEN 法学 < 50 AND 経済学 < 50 AND 哲学 < 50 AND 情報理論 < 50 AND 外国語 < 50     THEN 'D'
        ELSE 'C'
    END;


SELECT * FROM 成績表;

SELECT *
FROM 家計簿
ORDER BY 出金額;

SELECT *
FROM 家計簿
ORDER BY 入金額 DESC, 出金額 DESC;

SELECT 費目, 出金額
FROM 家計簿
ORDER BY 出金額 DESC
LIMIT 3;
-- 先頭から欲しい場合はoffsetは省略可能

SELECT 費目, 出金額
FROM 家計簿
ORDER BY 出金額 DESC
LIMIT 1
OFFSET 2;

CREATE TABLE 注文履歴(
    日付 DATE,
    注文番号 INT,
    注文枝番 INT,
    商品名 VARCHAR(50),
    分類 CHAR(1),
    サイズ CHAR(1),
    単価 INT,
    数量 INT,
    注文金額 INT
);

SELECT * FROM 注文履歴;

load data infile 'c:/temp/chumon3.txt'
into table 注文履歴
character set sjis
lines terminated by '\r\n';

SELECT *
FROM 注文履歴
ORDER BY 注文番号, 注文枝番;

SELECT DISTINCT 商品名
FROM 注文履歴
WHERE 
    日付 >= '2022-01-01'
    AND
    日付 < '2022-02-01'
ORDER BY 商品名;

SELECT 注文番号, 注文枝番, 注文金額
FROM 注文履歴
WHERE 分類 = '1'
ORDER BY 注文金額
LIMIT 3
OFFSET 1;

SELECT 日付, 商品名, 単価, 数量, 注文金額
FROM 注文履歴
WHERE 
    分類 = '3'
    AND
    数量 >= 2
ORDER BY 日付, 数量 DESC;

SELECT * FROM 注文履歴;

SELECT 分類, 商品名, サイズ, 単価
FROM 注文履歴
WHERE 分類 = '1'
UNION
SELECT 分類, 商品名, '', 単価
FROM 注文履歴
WHERE 分類 = '2'
UNION
SELECT 分類, 商品名, '', 単価
FROM 注文履歴
WHERE 分類 = '3'
ORDER BY 分類, 商品名;

SELECT DISTINCT 分類, 商品名,
    CASE 分類
        WHEN '1' THEN サイズ
        ELSE  ''
    END AS サイズ, 単価
FROM 注文履歴
ORDER BY 分類, 商品名;

SELECT 費目, 出金額,
    CASE 費目
        WHEN '居住費' THEN '固定費'
        WHEN '水道光熱費' THEN '固定費'
        ELSE '変動費' 
    END AS 出費の分類
FROM 家計簿
WHERE 出金額 > 0;

/*
$出費の分類 = null;
swith($費目) {
    case '居住費':
        $出費の分類 = '固定費';
        break;
    case '水道光熱費':
        $出費の分類 = '固定費';
        break;
    default:
        $出費の分類 = '変動費';
        break;
}
*/

SELECT 費目, 入金額,
    CASE 
        WHEN 入金額 < 5000 THEN 'お小遣い'
        WHEN 入金額 < 100000 THEN '一時収入'
        WHEN 入金額 < 300000 THEN '給料出たー！'
        ELSE '想定外の収入です！'
    END AS 収入の分類
FROM 家計簿
WHERE 入金額 > 0;

/*
$収入の分類 = null;
if ($入金額 < 5000) {
    $収入の分類 = 'お小遣い';
} else if ($入金額 < 100000) {
    $収入の分類 = '一時収入';
} else if ($にゅうきん額 < 300000) {
    $収入の分類 = '給料出たー！';
} else {
    $収入の分類 = '想定外の収入です！';
}
*/

SELECT floor(1.9999999);
SELECT ceil(1.00000001);
SELECT round(1.2345, 3);
SELECT truncate(1.23456, 3);

SELECT truncate(1234567890, -3);
SELECT round(1234567890, -3);

SELECT curdate(), current_date(), current_date;
SELECT curtime(), current_time(), current_time;
SELECT date_format(now(), '%Y-%m-%d');

SELECT adddate(now(), interval 10 day);
SELECT adddate(now(), interval 10 week);
SELECT adddate(now(), interval 10 month);
SELECT adddate(now(), interval 10 quarter);
SELECT adddate(now(), interval 10 year);
SELECT subdate(now(), interval 10 day);

SELECT addtime(now(), '1 2:3:4');

SELECT year(now()), month(now()), date(now()), hour(now()), minute(now()), second(now());

SELECT extract(YEAR_MONTH from now());