-- Tạo và sử dụng Schema quan_ly_sinh_vien
CREATE DATABASE IF NOT EXISTS quan_ly_sinh_vien CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE quan_ly_sinh_vien;

-- Bảng lưu trữ thông tin 
CREATE TABLE IF NOT EXISTS students (
    id VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    grade DECIMAL(4, 2) NOT NULL
);