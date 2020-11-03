<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <style>
        body {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }
        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }
        p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size:20px;
            margin: 0;
        }
        i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left:-15px;
        }
        .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card col-md-12">
                        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                            <i class="checkmark">✓</i>
                        </div>
                        <h1>Pembayaran Berhasil</h1> 
                        <p>Terimakasih atas pembayaran Anda</p>
                        {{-- <a href="intent://faskes/riwayat/detail/19/#Intent;scheme=idinfokesmobile;package=id.infokes.mobile;end">Infokes Mobile 2.0</a> --}}
                        <a href="idinfokesmobile://faskes/riwayat/detail/19">Infokes Mobile 2.0</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>