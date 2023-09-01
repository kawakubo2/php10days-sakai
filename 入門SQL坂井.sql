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

SELECT *
from 書籍
WHERE 書籍コード LIKE '1%2_';

SELECT *
FROM 書籍
WHERE シリーズ名 NOT LIKE '%入門%';

SELECT *
FROM 書籍
WHERE シリーズ名 NOT LIKE '入門%';

SELECT *
FROM 給与 
WHERE
    勤務区分 = 'MORNING'
    OR
    勤務区分 = 'DAY'
    OR
    勤務区分 = 'NIGHT';

SELECT *
FROM 給与
WHERE 勤務区分 IN ('MORNING', 'DAY', 'NIGHT');

SELECT *
FROM 給与
WHERE 勤続年数 IN (3, 5);

SELECT *
FROM 給与
WHERE 勤務区分 NOT IN ('MORNING', 'DAY', 'NIGHT');

SELECT *
FROM 給与
WHERE 
    勤務区分 <> 'MORNING'
    AND
    勤務区分 <> 'DAY'
    AND
    勤務区分 <> 'NIGHT'
    
SELECT *
FROM 給与
WHERE
    基本給 >= 25
    AND
    基本給 <= 30;

SELECT *
FROM 給与
WHERE 基本給 BETWEEN 25 and 30;

SELECT *
FROM 給与
WHERE 基本給 NOT BETWEEN 25 and 30;

SELECT *
FROM 給与
WHERE
    基本給 < 25
    OR
    基本給 > 30;

