<div class="admin-auth">
    <div class="admin-auth-content">
        <form action="/admin/auth/" method="POST" class="admin-auth-form">
            <div class="form-group">
                <label for="login">Имя пользователя:</label>
                <input name="login" id="login" class="form-control" type="text" size="25">
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input name="password" id="password" class="form-control" type="password">
            </div>
            <div class="form-group button">
                <input class="btn btn-primary" type="submit" value="Войти">
            </div>
        </form>
    </div>
</div>