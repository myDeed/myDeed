# Signup.php

## Overview

This PHP script handles user registration, including:

- Password validation
- Password hashing
- User data insertion into a database
- Session management
- Redirection to the login page

## Structure

1. **Password Matching:**
    - Checks if the entered password and confirm password match using `password_matches_confirm_password`.
2. **Hashing Password:**
    - If passwords match, hashes the password using `hash_password`.
3. **Inserting User Data:**
    - Prepares an SQL query to insert user details into the `users` table.
    - Executes the query using `execute_query`.
4. **Handling Query Result:**
    - If query succeeds:
        - Sets a flag to show an alert.
        - Starts a session using `session_start()`.
        - Stores user details in session variables using `store_user_session_variables`.
        - Redirects the user to the login page after 5 seconds using JavaScript.
    - If query fails:
        - Sets an error message indicating failure.
5. **Password Mismatch:**
    - If passwords don't match, sets an error message.

## Considerations

- **Security:**
    - Consider stronger password hashing algorithms (e.g., bcrypt, Argon2).
    - Implement input validation and sanitization to prevent SQL injection.
    - Store sensitive data securely (e.g., hashed passwords).
- **Error Handling:**
    - Provide informative error messages for troubleshooting.
    - Log errors for analysis.
- **Dependencies:**
    - Relies on functions `password_matches_confirm_password`, `hash_password`, and `execute_query` (implementation not provided).
- **Session Management:**
    - Ensure proper session handling and security measures.