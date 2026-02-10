CREATE DATABASE IF NOT EXISTS portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE portfolio_db;

CREATE TABLE IF NOT EXISTS projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  technologies VARCHAR(255) NOT NULL,
  githubLink VARCHAR(255) NOT NULL,
  liveLink VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS skills (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  category VARCHAR(150) NOT NULL,
  level INT NOT NULL
);

CREATE TABLE IF NOT EXISTS certificates (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  issuer VARCHAR(255) NOT NULL,
  image VARCHAR(255) NOT NULL,
  year INT NOT NULL
);

CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  email VARCHAR(200) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS admin_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO admin_users (username, password)
VALUES ('admin', '$2y$12$yo4CIVwcVZaGUK43SAJV/OX.ptsJA1PR3JUUNUiySXm5tcjVyaO.2')
ON DUPLICATE KEY UPDATE username=username;

INSERT INTO projects (title, description, image, technologies, githubLink, liveLink) VALUES
('Task Management App', 'A productivity app with authentication and dynamic dashboard.', 'https://via.placeholder.com/600x400?text=Project+1', 'PHP, MySQL, JavaScript', 'https://github.com/example/task-manager', 'https://example.com/task-manager'),
('E-commerce Landing Page', 'Responsive store landing page with modern UI interactions.', 'https://via.placeholder.com/600x400?text=Project+2', 'HTML, CSS, JavaScript', 'https://github.com/example/ecommerce', 'https://example.com/ecommerce'),
('University Portal', 'Academic portal for managing courses, grades, and student profiles.', 'https://via.placeholder.com/600x400?text=Project+3', 'PHP, MySQL, Bootstrap', 'https://github.com/example/university', 'https://example.com/university');

INSERT INTO skills (name, category, level) VALUES
('PHP', 'Backend', 90),
('MySQL', 'Database', 88),
('JavaScript', 'Frontend', 85),
('TailwindCSS', 'Frontend', 82),
('HTML5', 'Frontend', 95),
('CSS3', 'Frontend', 90);

INSERT INTO certificates (title, issuer, image, year) VALUES
('Full Stack Web Development', 'Coursera', 'https://via.placeholder.com/600x400?text=Certificate+1', 2023),
('Advanced PHP Programming', 'Udemy', 'https://via.placeholder.com/600x400?text=Certificate+2', 2024),
('Database Design Fundamentals', 'edX', 'https://via.placeholder.com/600x400?text=Certificate+3', 2022);
