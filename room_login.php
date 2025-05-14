<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URBAN STAY - Room Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            max-width: 400px;
            margin: 100px auto;
        }
        .error-msg {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-container bg-white p-4 rounded shadow">
        <h2 class="text-center mb-4">Room Login</h2>
        <form id="login-form">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control shadow-none" id="username" required>
                <div id="username-error" class="error-msg d-none">Invalid username. Please use a valid name.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control shadow-none" id="password" required>
                <div id="password-error" class="error-msg d-none">
                    Password must be 8-20 characters long, with at least one letter, one number, and one special character.
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 shadow-none">Login</button>
        </form>
    </div>
    <script>
        document.getElementById('login-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Regular expressions for validation
            const usernameRegex = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/; // Allows first name or first and last name with only letters
            const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;

            let isValid = true;

            // Validate username
            if (!usernameRegex.test(username)) {
                document.getElementById('username-error').classList.remove('d-none');
                isValid = false;
            } else {
                document.getElementById('username-error').classList.add('d-none');
            }

            // Validate password
            if (!passwordRegex.test(password)) {
                document.getElementById('password-error').classList.remove('d-none');
                isValid = false;
            } else {
                document.getElementById('password-error').classList.add('d-none');
            }

            // If both validations pass, proceed to the next page
            if (isValid) {
                window.location.href = "room.html";
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
