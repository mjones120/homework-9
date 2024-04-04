-- select by id 1:
SELECT * FROM posts WHERE id = 1;

-- select all posts where title = includes "title 2":
SELECT * FROM posts WHERE title = includes "title 2";

-- select all posts and order by the title column alphabetically:
SELECT * FROM posts ORDER BY title ASC;

-- insert 3 new posts
INSERT INTO posts VALUES 
(1, "title 1"),
(2, "title 2"),
(3, "title 3");
-- update posts where id = 1, set the title to "new title"
UPDATE posts SET title = "new title" WHERE id = 1;

-- delete post where id = 2
DELETE FROM posts WHERE id = 2;
