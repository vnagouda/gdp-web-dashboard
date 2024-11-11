CREATE DATABASE IF NOT EXISTS gdp_project_db;

USE gdp_project_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert admin user with the hashed password
INSERT INTO users (username, password, email, role) 
VALUES ('admin', '$2y$10$Fm5zSjzhUkl2tpFYyiCnY.b./RP.eb5FHLcCvoKAC5CRq.7LuAcK2', 'admin@example.com', 'admin');
