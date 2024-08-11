<form action="{{route('users.show', )}}" method="POST">
@csrf
<input type="text" placeholder="Имя" name="name">
<input type="email" placeholder="Почта" name="email">
<input type="password" placeholder="Пароль" name="password">
<!-- <input type="confirm_password" placeholder="Подтвердить пароль" name="confirm_password"> -->
<button name="submit" type="submit">Зарегаться</button>
</form>