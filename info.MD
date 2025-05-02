create table quiz_Results(
    ip nvarchar(32),
    result int
);

create table contact(
    Fname nvarchar(32),
    Email nvarchar(254),
    Subject text,
    Message text
);

create table quiz2_results (
        id INT AUTO_INCREMENT PRIMARY KEY,
        ip_address VARCHAR(45),
        score INT,
        submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";