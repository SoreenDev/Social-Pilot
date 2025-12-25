<x-auth.layout>
    <h3 class="card-title text-left mb-3">Register</h3>
    <form action="{{ route('auth.register') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control p_input" name="username">
        </div>
        @error('username')
        <div class="label -mt-4 mb-2">
            <span class="label-text-alt text-error text-danger">{{ $message }}</span>
        </div>
        @enderror
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control p_input" name="email">
        </div>
        @error('email')
        <div class="label -mt-4 mb-2">
            <span class="label-text-alt text-error text-danger">{{ $message }}</span>
        </div>
        @enderror
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control p_input" name="password">
        </div>
        <div class="form-group">
            <label>confirmed password</label>
            <input type="password" class="form-control p_input" name="password_confirmation">
        </div>
        @error('password')
        <div class="label -mt-4 mb-2">
            <span class="label-text-alt text-error text-danger">{{ $message }}</span>
        </div>
        @enderror
        <div class="form-group d-flex align-items-center justify-content-between">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
        </div>
        <div class="d-flex">
        </div>
    </form>
</x-auth.layout>
