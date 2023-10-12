<x-auth-layout>
    <div class="auth-form">
        <div class="text-center mb-3">
            {{-- <a href="index.html"><img src="/assets/images/logo/logo-full.png" alt=""></a> --}}
        </div>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h4 class="text-center mb-4">Sign up your account</h4>
        <form action="{{ route('register') }}" method="POST">@csrf
            <div class="mb-3">
                <label class="mb-1"><strong>Full Name</strong></label>
                <input type="text" required name="name" class="form-control" placeholder="John Doe">
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>Email</strong></label>
                <input type="email" required name="email" class="form-control" placeholder="hello@example.com">
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>Password</strong></label>
                <input type="password" name="password" required class="form-control">
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>Confirm Password</strong></label>
                <input type="password" required name="password_confirmation" class="form-control">
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>Phone</strong></label>
                <input type="text" required name="phone_number" class="form-control" placeholder="John Doe">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
            </div>
        </form>
        <div class="new-account mt-3">
            <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
        </div>
    </div>
</x-auth-layout>
