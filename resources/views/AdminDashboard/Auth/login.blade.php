<x-auth.layout>
    <h3 class="card-title text-left mb-3">Login</h3>
    <form method="GET" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label> email </label>
            <input type="text" class="form-control p_input" name="email">
        </div>
        <div class="form-group">
            <label>Password </label>
            <input type="text" class="form-control p_input" name="password">
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
            </div>
            <a href="{{ route('external404',['message'=>'This section is under development']) }}" class="forgot-pass">Forgot password</a>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
        </div>
        {{--                            <div class="d-flex">--}}
        {{--                                <button class="btn btn-google col"><i class="mdi mdi-google-plus"></i> Google plus </button>--}}
        {{--                            </div>--}}
        <p class="sign-up">Don't have an Account?
            <a href="{{ route('external404',['message'=>'This section is under development']) }}"> Sign Up</a>
        </p>
    </form>
</x-auth.layout>
