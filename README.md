# CodeAlpha_Secure_Coding
## Overview

 The main focus of this project is to identify and mitigate SQL Injection vulnerabilities in PHP applications.

## Project Components

1. **Report**: A detailed analysis of SQL Injection vulnerabilities, secure and non-secure code versions, and recommendations for improving code security.
2. **Code Files**:
    - `client.php`
    - `connection.php`
    - `createAccount.php`
    - `login.php`

## Tools Used

- **Burp Suite**: For security testing and vulnerability scanning.
- **SQLmap**: For automated SQL Injection testing.

## Key Improvements Implemented

1. **Password Hashing**: Storing hashed passwords to enhance security.
2. **Database Interaction Isolation**: Centralizing database interactions in a single class with secure methods.
3. **Database Constraints**: Limiting DB constraints to prevent attacks and network mapping.
4. **HTML Input Attributes**: Using `minlength`, `maxlength`, and `required` attributes to control user input.
5. **Prepared Statements**: Using prepared statements to prevent SQL Injection.
6. **Input Sanitization**: Sanitizing and filtering user input before storage or output.

## Usage

To run the project locally, follow these steps:

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/repo-name.git
    ```

2. Set up your database and update the `connection.php` file with your database credentials.

3. Deploy the PHP files on your web server.

## Conclusion

This project demonstrates the importance of secure coding practices in web development. By implementing the improvements mentioned above, we can significantly reduce the risk of SQL Injection attacks and enhance the overall security of web applications.

---

Feel free to contribute by opening issues or submitting pull requests.
