<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register Page</title>
</head>
<body>
    <section class="sign_up">
        <div class="container">
            <h1>Admin User Login</h1>
            <p id="create">Here only admin will login</p>
            <div class="details">
                <form action="{{ url('form_submit') }}" method="post">
                    {{ csrf_field() }}
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Passowrd" required>
            </div>
            <input type="submit"id="register_btn" name="submit">
        </form>
        </div>
    </section>
</body>

</html>
