@include('common.header')

<body class="">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                            project for free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5 class="label-register-as">Daftar Sebagai Pelanggan</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" id="form-user">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="full_name" class="form-control" placeholder="Bill..."
                                            aria-label="Name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="user123..."
                                            aria-label="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Kata Sandi</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Kata Sandi..." aria-label="Name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Konfirmasi Kata Sandi</label>
                                        <input type="password" name="confirm-password" class="form-control"
                                            placeholder="Konfirmasi Kata Sandi..." aria-label="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            aria-label="Name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="text" name="phone_no" class="form-control" placeholder="No Telepon"
                                            aria-label="Email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Foto Profil</label>
                                    <input type="file" name="photo" class="form-control" placeholder="Photo"
                                        aria-label="Password">
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input class="form-check-input input-user-type" type="checkbox" role="switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Daftar Sebagai Mitra
                                        Usaha</label>
                                </div>
                                <div class="mb-4 form-mitra visually-hidden">
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Nama Perusahaan</label>
                                            <input type="text" name="company_name" class="form-control"
                                                placeholder="PT. ABC ..." aria-label="Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                        <label class="form-label">Kartu Identitas (KTP/SIM/Passport)</label>
                                    <input type="file" name="photo" class="form-control" placeholder="company_id_card"
                                        aria-label="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                        <label class="form-label">Logo Perusahaan</label>
                                    <input type="file" name="photo" class="form-control" placeholder="company_logo"
                                        aria-label="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                        <label class="form-label">Alamat Perusahaan</label>
                                        <textarea type="text" name="company_name" class="form-control"
                                                placeholder="Jl. ABC..." aria-label="Name"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                        <label class="form-label">Deskripsi Singkat Perusahaan</label>
                                        <textarea type="text" name="company_name" class="form-control"
                                                placeholder="PT. ABC adalah..." aria-label="Name"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms
                                            and Conditions</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a href="/login"
                                        class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Kelompok 7 Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        $(document).ready(function() {
            $(".input-user-type").change(function() {
                if (this.checked) {
                    console.log(".input-user-type checked!");
                    $(".label-register-as").text("Daftar Sebagai Mitra Usaha");
                    $(".form-mitra").removeClass("visually-hidden");
                } else {
                    console.log(".input-user-type unchecked!");
                    $(".label-register-as").text("Daftar Sebagai Pelanggan");
                    $(".form-mitra").addClass("visually-hidden");
                }
            });
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>