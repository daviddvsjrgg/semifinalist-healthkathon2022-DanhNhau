<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dashboard</title>
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

                    <div class="card" style="width: 100rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">-Detail Akun-</h6>
                            <div class="row d-flex justify-content-center">
                                <h3 class="text-secondary">Nama: </h3>
                                <div class="col-md-6 mb-4 ">
                                    <div class="form-outline ">
                                        <input placeholder="{{ Auth::user()->nama }}" type="text" id="form3Example4"
                                            class="form-control" readonly="readonly" />
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <h3 class="text-secondary">NIK&nbsp&nbsp&nbsp&nbsp: </h3>
                                <div class="col-md-6 mb-4 ">
                                    <div class="form-outline ">
                                        <input placeholder="{{ Auth::user()->nik }}" type="text" id="form3Example4"
                                            class="form-control" readonly="readonly" />
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted mb-4">Tagihan Pembayaran - Rp 750.000 - <a href="#"
                                    class="text-info">bayar</a></h6>
                            <a href="/dashboard" class="card-link m-1">kembali</a>
                        </div>
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
