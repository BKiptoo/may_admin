<section class="page-header section-height-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 mx-auto">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-info text-gradient">Welcome to Messianic Assembly of Yahweh</h3>
                        <p class="mb-0">Create a new account</p>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="login">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input wire:model.defer="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input wire:model.defer="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-check form-switch">
                                <input wire:model="remember_me" class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <small class="text-muted">Forgot your password? Reset your password <a href="{{ route('forgot-password') }}" class="text-info text-gradient font-weight-bold">here</a></small>
                        <p class="mb-4 text-sm mx-auto">
                            Don't have an account? <a href="{{ route('sign-up') }}" class="text-info text-gradient font-weight-bold">Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none">
                <div class="oblique position-absolute top-0 h-100">
                    <div class="oblique-image bg-cover position-absolute fixed-top h-100" style="background-image: url('https://images.unsplash.com/photo-1523803326055-9729b9e02e5a?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
                </div>
            </div>
        </div>
    </div>
</section>
