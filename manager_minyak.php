<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Mesin Kontrol Minyak Tanah</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="/bootstrap.min.css">
  <style>
      .table-responsive {
          display: table;
      }
      .loading {
          position: fixed;
          z-index: 999;
          height: 2em;
          width: 2em;
          overflow: visible;
          margin: auto;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
        }
        
        /* Transparent Overlay */
        .loading:before {
          content: '';
          display: block;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.3);
        }
        
        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
          /* hide "loading..." text */
          font: 0/0 a;
          color: transparent;
          text-shadow: none;
          background-color: transparent;
          border: 0;
        }
        
        .loading:not(:required):after {
          content: '';
          display: block;
          font-size: 10px;
          width: 1em;
          height: 1em;
          margin-top: -0.5em;
          -webkit-animation: spinner 1500ms infinite linear;
          -moz-animation: spinner 1500ms infinite linear;
          -ms-animation: spinner 1500ms infinite linear;
          -o-animation: spinner 1500ms infinite linear;
          animation: spinner 1500ms infinite linear;
          border-radius: 0.5em;
          -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
          box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
        }
      
        /* Animation */
        
        @-webkit-keyframes spinner {
          0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
          }
          100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        @-moz-keyframes spinner {
          0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
          }
          100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        @-o-keyframes spinner {
          0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
          }
          100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        @keyframes spinner {
          0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
          }
          100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
      </style>
</head>
<body class="container">
    <div id="loading" class="loading" style="display: none;">Loading&#8230;</div>
      <hr>
      <div class="pull-right">
        <a href="javascript:history.back()" class="btn btn-default">Go Back</a>
      </div>
      <hr>
      <center>
          <img src="beltim.png" alt="" width="120">
        </center>
      <hr>
      <h1 class="text-center">Selamat Datang Di Halaman Manager System</h1>
      <div class="well">
        <p>Mesin Kontrol Subsidi Minyak Desa Merupakan Sebuah Alat untuk mengelola dan memanajemen data subsidi dan pembagian minyak otomatis dan terukur menggunakan Kartu Kendali dan berbasis <i>Internet Of Things <b>IoT</b></i></p>
        <br>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-5">
          <a class="btn btn-block btn-warning" href="/processing/laporan_minyak.php">Download Laporan <i class="fa fa-table"></i></a>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2"></div>
        <div class="col-md-5 col-sm-5 col-xs-5">
          <div class="row">
            <div class="col-md-6">
              <button type="button" onclick="isiulang()" class="btn btn-primary btn-block">
                Isi Ulang Tangki Ukur
              </button>
            </div>
            <div class="col-md-6">
              <button type="button" onclick="kuras()" class="btn btn-danger btn-block">
                Kuras Tangki Ukur
              </button>
            </div>
          </div>
        </div>
      </div>

        <hr>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-striped table-responsive-lg" width="100%">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Timestamp</th>
                              <th scope="col">Kode Desa</th>
                              <th scope="col">NIK</th>
                              <th scope="col">Liter</th>
                            </tr>
                      </thead>
                      <tbody id="table">
                      </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="/bootstrap.min.js"></script>
    <script type="text/javascript">
      function isiulang(){
        $("#loading").show();
        $.ajax({
          url: '/processing/pilih_engine.php',
          type: 'post',
          data: {
            data : 'SISTEM:ADMIN:99',
          },
          success: function(data){
            console.log(data);
            alert("Sedang Mengisi Tangki");
            get_data();
          }
        });
      }
      function kuras(){
        $("#loading").show();
        $.ajax({
          url: '/processing/pilih_engine.php',
          type: 'post',
          data: {
            data : 'SISTEM:ADMIN:0',
          },
          success: function(data){
            console.log(data);
            alert("Sedang Menguras Tangki");
            get_data();
          }
        });
      }
      $(document).ready(function(){
        $("#loading").show();
        get_data();
      });
      function get_data() {
        $.ajax({
          url: '/processing/manager.php',
          success: function(data){
            $("#loading").hide();
            var obj = JSON.parse(data);
            console.log(obj);
            var tabel = "";
            for (let i = 0; i < obj.length; i++) {
              const id = obj[i]['id'];
              const nik = obj[i]['nik'];
              const desa = obj[i]['desa'];
              const banyak = obj[i]['banyak'];
              const reg_date = obj[i]['reg_date'];
              tabel += `<tr>
                <td>`+(i+1)+`</td>
                <td scope="row">`+reg_date+`</td><
                <td>`+desa+`</td>
                <td>`+nik+`</td>
                <td>`+banyak+`</td>
                /tr>`;
            }
            $("#table").html(tabel);
          }
        });
      }
    </script>
   
</body>
</html>