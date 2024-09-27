@extends('frontend.layout.main')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@section('title', 'Registration')


@section('main-section')
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================== Login Section ================== -->
    <section class="py-5">
        <div class="container">

            <div class="row justify-content-center align-items-center m-auto">
                <div class="col-12">
                    <div class="bg-mode shadow rounded-3 overflow-hidden">
                        <div class="row g-0">
                            <!-- Vector Image -->
                            <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
                                <div class="p-3 p-lg-5">
                                    <img src="assets/img/login.svg" class="img-fluid" alt="">
                                </div>
                                <!-- Divider -->
                                <div class="vr opacity-1 d-none d-lg-block"></div>
                            </div>

                            <!-- Information -->
                            <div class="col-lg-6 order-1">
                                <div class="p-4 p-sm-7">
                                    <!-- Logo -->
                                    <a href="index.html">
                                        <img class="img-fluid mb-4" src="assets/img/logo-icon.png" width="70" alt="logo">
                                    </a>
                                    <!-- Title -->
                                    <h1 class="mb-2 fs-2">Create New Account</h1>
                                    <p class="mb-0">Already a Member?<a href="login.html" class="fw-medium text-primary"> Signin</a></p>

                                    <!-- Form START -->
                                    <form class="mt-4 text-start" action="{{ route('registrationForm.post') }}" method="post">
                                        @csrf
                                        <div class="form py-4">
                                            <div class="form-group">
                                                <label class="form-label">Enter Name</label>
                                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}" required>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Enter Email ID</label>
                                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Enter Password</label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                                    <span class="fa-solid fa-eye toggle-password position-absolute top-50 end-0 translate-middle-y me-3"></span>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" id="confirm_password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="*********" required>
                                                @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" id="submit" class="btn btn-primary full-width font--bold btn-lg">Create An Account</button>
                                            </div>
                                        </div>

                                        <!-- Other form sections go here -->
                                        </form>
                                        <!-- Form END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================== Login Section End ================== -->

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
@endsection

<script>
    $('#registrationForm').submit(function(e) {
        e.preventDefault();
    })
</script>
