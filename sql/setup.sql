/* 全削除プロセス */
DROP DATABASE kitabooks;
CREATE DATABASE kitabooks;

/* テーブル作成 */
SOURCE setup/table/create_genre.sql;
SOURCE setup/table/create_books.sql;
SOURCE setup/table/create_accounts.sql;
SOURCE setup/table/create_bookmarks.sql;
SOURCE setup/table/create_book_details.sql;

/* データ挿入 */
SOURCE setup/data/insert_genre.sql;
SOURCE setup/data/insert_books.sql;
SOURCE setup/data/insert_accounts.sql;
SOURCE setup/data/insert_book_details.sql;
SOURCE setup/data/insert_bookmarks.sql;
