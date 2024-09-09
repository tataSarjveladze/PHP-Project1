-- Relations!
CREATE TABLE posts (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       user_id INT NOT NULL,
                       title VARCHAR(255) NOT NULL,
                       content TEXT NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO posts (user_id, title, content) VALUES (7, 'First Post', 'This is the first post by John Doe'), (7, 'Second Post', 'This is the second post by John Doe'), (8, 'First Post', 'This is the first post
by Jane Doe');

SELECT
    posts.id AS post_id,
    posts.title,
    posts.content,
    users.username,
    posts.created_at
FROM
    posts
        INNER JOIN
    users ON posts.user_id = users.id;

-- Image upload.
ALTER TABLE users ADD picture BLOB;

ALTER TABLE users MODIFY COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP AFTER picture;

