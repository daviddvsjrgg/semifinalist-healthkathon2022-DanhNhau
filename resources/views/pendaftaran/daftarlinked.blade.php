<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Daftar</title>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -150px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Daftar Dengan Linked Accounts</h2>
                        <form action="/daftarlinked" method="POST">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input name="nik" placeholder="Nomor Kartu Keluarga" type="text"
                                            id="form3Example1" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input name="ktp" placeholder="Nomor Induk Kependudukan" type="text"
                                            id="form3Example2" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input name="nama" placeholder="Nama" type="text" id="form3Example3"
                                    class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input name="tglLahir" type="date" id="form3Example4" placeholder="Tanggal Lahir"
                                    class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <input name="password" placeholder="Password" type="password" id="form3Example4"
                                    class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <input placeholder="Konfirmasi Password" type="password" id="form3Example4"
                                    class="form-control" />
                            </div>

                            <h6 class="mb-3 text-secondary">-Hubungkan Akun-</h6>
                            <div class="form-outline mb-4">
                                <input name="nik_id" placeholder="Masukkan NIK Yang Ingin Dihubungkan" type="text"
                                    id="form3Example4" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <input name="nama_id" placeholder="Nama" type="text" id="form3Example4"
                                    class="form-control" />
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-info btn-block mb-4">
                                Daftar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>
