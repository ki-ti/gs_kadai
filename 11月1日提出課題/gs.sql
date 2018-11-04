INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('たなか','test3@test','bbbbbbbbb',sysdate());

SELECT COUNT(*) email FROM gs_an_table;

SELECT * FROM gs_an_table WHERE name='たなか':

SELECT * FROM gs_an_table WHERE id>=1 AND id<=3;

SELECT * FROM gs_an_table WHERE name LIKE '%た%';

SELECT * FROM gs_an_table ORDER BY indate DESC;

SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 3;





INSERT INTO gs_bm_table(name,url,comment,date)VALUES('ikki','aaaaa','コメント',sysdate());