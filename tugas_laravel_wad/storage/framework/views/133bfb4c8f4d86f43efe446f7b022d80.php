<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
            text-align: center;
        }
        <style>
        .center-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
</style>
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        <?php if($errors->any()): ?>
            <div class="error">
                <?php echo e($errors->first('login')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login.submit')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <br><br><br><br><br>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tugas_laravel_wad\resources\views/auth/login.blade.php ENDPATH**/ ?>