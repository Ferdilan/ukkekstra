<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="bg-gradient-dark">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-5">Register</h1>
                                    </div>
                                    <form action="{{ route ('simpanregistrasi') }}" method="post">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            name="nama"
                                                placeholder="Masukkan Nama Lengkap Anda" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            name="email"
                                                placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input"
                                                    onclick="myFunction()" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Tampilkan Password</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark btn-user btn-block" type="submit">Register</button>
                                        <hr>
                                        <p class="mb-0">Sudah Punya Akun? 
                                         <a href="{{route ('login')}}"class="text-center">Silahkan Login</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <script>
    function myFunction() {
        var x = document.getElementById("exampleInputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('bt') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('bt') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('bt') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('bt') }}/js/sb-admin-2.min.js"></script>

</body>

</html>