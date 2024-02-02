<section class="h-100-vh mb-8">
    <div class="oblique position-absolute top-0 h-100 w-100">
        <div class="oblique-image bg-cover position-absolute fixed-top h-100 w-100" style="background-image: url('https://images.unsplash.com/photo-1501386761578-eac5c94b800a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
    </div>
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="font-weight-bolder text-info text-gradient">Welcome to Messianic Assembly of Yahweh</h1>
                    <p class="text-lead text-white">We love what YAHWEH loves and hate what HE hates</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Register with</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3">
                        <!-- Social media buttons -->
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="register" action="#" method="POST" role="form text-left">
                            <div class="mb-3">
                                <div class="@error('name') border border-danger rounded-3  @enderror">
                                    <input wire:model="name" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input wire:model="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('phone') border border-danger rounded-3 @enderror">
                                    <input wire:model="phone" type="tel" class="form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="number-addon">
                                </div>
                                @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <input wire:model="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                </div>
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('password_confirmation') border border-danger rounded-3 @enderror">
                                    <input wire:model="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="confirm-password-addon">
                                </div>
                                @error('password_confirmation') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-check form-check-info text-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a></label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
