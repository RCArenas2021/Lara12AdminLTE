<x-layouts.guest>
    <h1>Iniciar sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Correo</label>
            <input id="email" type="email" name="email" required autofocus />
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required />
        </div>
        <div>
            <label>
                <input type="checkbox" name="remember"> Recordarme
            </label>
        </div>
        <button type="submit">Entrar</button>
    </form>
    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
</x-layouts.guest>
