<x-layouts.guest>
    <h1>Recuperar contraseña</h1>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">Correo</label>
            <input id="email" type="email" name="email" required autofocus />
        </div>
        <button type="submit">Enviar enlace</button>
    </form>
</x-layouts.guest>
