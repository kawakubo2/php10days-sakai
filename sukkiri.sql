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