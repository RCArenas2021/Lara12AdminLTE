<x-layouts.guest>
    <h1>Registro de usuario</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" required autofocus />
        </div>
        <div>
            <label for="email">Correo</label>
            <input id="email" type="email" name="email" required />
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required />
        </div>
        <div>
            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required />
        </div>
        <button type="submit">Registrar</button>
    </form>
</x-layouts.guest>
