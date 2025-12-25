<x-auth.layout>
    <h3 class="card-title text-left mb-3">Login</h3>
    <form method="POST" action="{{ route('auth.login') }}">
        @csrf
        <div class="form-group">
            <label> email </label>
            <input type="text" class="form-control p_input" name="email">
        </div>
        @error('email')
        <div class="label -mt-4 mb-2">
            <span class="label-text-alt text-error text-danger">{{ $message }}</span>
        </div>
        @enderror
        <div class="form-group">
            <label>Password </label>
            <input type="password" class="form-control p_input" name="password">
        </div>
        @error('password')
        <div class="label -mt-4 mb-2">
            <span class="label-text-alt text-error text-danger">{{ $message }}</span>
        </div>
        @enderror
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
        </div>
    </form>
</x-auth.layout>
