show tables;

SELECT *
FROM 書籍;
/*
前方一致検索はパフォーマンスに影響なし
部分一致検索と後方一致検索は大量のデータを
検索する場合、著しくパフォーマンスが
低下する
*/
-- 部分一致検索
SELECT *
FROM 書籍
WHERE シリーズ名 LIKE '%入門%';

-- 前方一致検索
SELECT *
FROM 書籍
WHERE シリーズ名 LIKE '入門%';

-- 後方一致検索
SELECT *
FROM 書籍
WHERE シリーズ名 LIKE '%入門';

SELECT *
FROM 書籍
WHERE 分類 LIKE 'jp%';

SELECT *
FROM 書籍
WHERE 分類 LIKE binary 'jp%';

SELECT *
FROM 書籍
WHERE 分類 LIKE 'EU_';

SELECT *
FROM 書籍
WHERE 書籍コード LIKE '1___2';