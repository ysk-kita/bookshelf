/* 全削除プロセス */
DROP DATABASE kitabooks;
CREATE DATABASE kitabooks;

/* テーブル作成 */
SOURCE table/create_genre.sql;
SOURCE table/create_books.sql;
SOURCE table/create_accounts.sql;
SOURCE table/create_bookmarks.sql;
SOURCE table/create_book_details.sql;

/* データ挿入 */
SOURCE data/insert_genre.sql;
SOURCE data/insert_books.sql;
SOURCE data/insert_accounts.sql;
SOURCE data/insert_book_details.sql;
SOURCE data/insert_bookmarks.sql;
