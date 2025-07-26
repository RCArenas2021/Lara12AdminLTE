<x-layouts.guest>
    <h1>Restablecer contraseña</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}" />
        <div>
            <label for="email">Correo</label>
            <input id="email" type="email" name="email" required autofocus />
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required />
        </div>
        <div>
            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required />
        </div>
        <button type="submit">Restablecer</button>
    </form>
</x-layouts.guest>
