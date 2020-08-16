<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Auge</title>
</head>
<body>
    <?=form_open('Login/logar')?>
    <input type="text" name="login" placeholder="Login" minlength="3" maxlength="10">
    <input type="password" name="senha" placeholder="senha" minlength="3" maxlength="8">
    <button>Entrar</button>
    </form>
</body>
</html>