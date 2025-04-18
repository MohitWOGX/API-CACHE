<head>
  <title>𝐌 𝐇  𝐈  𝐓 𝐙  𝐗  𝐆</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link href="style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="vertical-layout" style="background-color:#000;">
<head>
  <style>
  @font-face {
  font-family: 'my-font';
  src: url('font.otf') format('truetype');
}

.col-sem-2 {
  display: none;
}
.col-md-4 {
  display: none;
}
.card {
  background-color: black;
  color: white;
  box-shadow: inset 0 0 0 2px #fff;
}

body {
font-family: 'my-font', sans-serif;
}

.niggahead {
font-size: 20px;
}
.h-10 {
  font-family: 'my-font', sans-serif;
  font-size: 16px;
  font-weight: 300;
  margin-bottom: 14px;
  color: white;
  width: 100%;
  float: right;
  border: 2px solid white;
  resize: none;
  background-color:#000000;
  border-radius:5px;
  min-height: 45px;
}
.btn-success {
  width: 49.5%;
  background-color: black;
  border: 2px solid white;
  color: white;
  border-radius: 5px;
  min-height: 45px;
  margin-right: auto;
  float: left;
}

.btn-sucess {
  background-color: black;
  color: white;
  float: left;
}

.btn-ino {
  background-color: black;
  color: white;
  float: left;
}
.btn-primary {
  position: relative;
  right: 24px;
  top: 26px;
}
.btn-kapi {
  position: relative;
  right: 24px;
  top: 26px;
}
.btn-copy {
  position: relative;
  right: 24px;
  top: 26px;
}
.btn-trash {
  position: relative;
  right: 24px;
  top: 26px;
}
.btn-dange {
  background-color: black;
  color: white;
  float: left;
}
.card {
  margin-bottom: 20px;
}

.ms-3 {
  width: 49.5%;
  background-color: black;
  border: 2px solid white;
  color: white;
  border-radius: 5px;
  margin-left: auto;
  float: right;
  min-height: 45px;
}
.mb-2 {
	.font-size:18px;
	}
.custom-textarea {
  background-color: black;
  color: white;
  box-shadow: inset 0 0 0 2px #fff;
  width: 100%;
  margin: 0;
  padding: 10px; 
  border: none; 
}
  </style>
</head>

<body class="vertical-layout" style="background-color:#000;">
  <center>
    <br>

    <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="niggahead"><strong>𝐌 𝐇  𝐈  𝐓 𝐙  𝐗  𝐆</strong></h4>
                <div class="md-form">
                  <textarea rows="6" id="lista" style="background-color:black; color: white; box-shadow: inset 0 0 0 2px #fff;color: white;width:100%; " class="form-control text-center form-checker mb-4" placeholder="ENTER YOUR CARDS HERE"></textarea>
                  <textarea rows="1" class="form-control text-center" style="background-color:black; color: white; box-shadow: inset 0 0 0 2px #fff;color: white;width:100%;height: 45px; "  id="proxy" placeholder="ENTER PROXY DETAILS"></textarea><br>
                  <select class="form-control h-10" id="gate">
                    <option value="api.php">TEST API INTEGRATION</option>
                  </select>
                  <div class="text-center">
                    <button class="btn btn-success" id="testar" onclick="enviar()">➤ START</button>
                    <button class="btn btn-danger ms-3">➤ STOP</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h2 class="badge bg-dark text-white">Informations</h2>
                <div>APPROVED CARDS: <span id="cLive" class="btn btn-success">0</span></div>
                <div>CCN MATCHED: <span id="cWarn" class="btn btn-info">0</span></div>
                <div>Declined: <span id="cDie" class="btn btn-danger">0</span></div>
                <div>Tested: <span id="total" class="btn btn-warning">0</span></div>
                <div>Total: <span id="carregadas" class="btn btn-dark">0</span></div>
              </div>
            </div>
          </div>
        </div>
  </div>
    

    <div class="col-md-12">
      <div class="card">
        <div style="position: absolute; top: 0; right: 0;">
          <button type="button" id="mostra3" class="btn btn-primary"><i class="fa fa-eye-slash"></i></button>
          <button type="button" class="btn btn-copy"><i class="fa fa-copy"></i></button>
        </div>
        <div class="card-body">
          <h6 style="font-weight: bold;" class="btn btn-sucess"><i class="fa fa-check text-success"></i> CHARGED <span id="cLive2" class="badge badge-black">0</span></h6><br><br>
          <div id="bode"><span id=".aprovadas" class="aprovadas"></span></div>
        </div>
      </div>
    </div>
    <br>

    <div class="col-md-12">
      <div class="card">
        <div style="position: absolute; top: 0; right: 0;">
          <button type="button" id="mostra3" class="btn btn-primary"><i class="fa fa-eye-slash"></i></button>
          <button type="button" class="btn btn-kapi"><i class="fa fa-copy"></i></button>
        </div>
        <div class="card-body">
          <h6 style="font-weight: bold; " class="btn btn-ino"><i class="fa fa-check text-success"></i> CCN & CVV<span id="cWarn2" class="badge badge-black">0</span></h6><br><br>
          <div id="bode3"><span id=".edrovadas" class="edrovadas"></span></div>
        </div>
      </div>
    </div>
    <br>

    <div class="col-md-12">
      <div class="card">
        <div style="position: absolute; top: 0; right: 0;">
          <button type="button" id="mostra2" class="btn btn-primary"><i class="fa fa-eye-slash"></i></button>
        </div>
        <div class="card-body">
          <h6 style="font-weight: bold;" class="btn btn-dange"><i class="fa fa-check text-danger"></i> Declined <span id="cDie2" class="badge badge-black">0</span></h6><br><br>
          <div id="bode2"><span id=".reprovadas" class="reprovadas"></span></div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </center>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){
	
$('.btn-copy').click(function(){
    var lista_lives = document.getElementById('.aprovadas').innerText;
    var textarea = document.createElement("textarea");
    textarea.value = lista_lives;
    document.body.appendChild(textarea); 
    textarea.select(); 
    document.execCommand('copy');           
    document.body.removeChild(textarea); 
});

$('.btn-kapi').click(function(){
    var lista_lives = document.getElementById('.edrovadas').innerText;
    var textarea = document.createElement("textarea");
    textarea.value = lista_lives;
    document.body.appendChild(textarea); 
    textarea.select(); 
    document.execCommand('copy');           
    document.body.removeChild(textarea); 
});

$('.btn-trash').click(function(){
$('#.reprovadas').text('');
});

    $("#bode").hide();
  $("#esconde").show();
  
  $('#mostra').click(function(){
  $("#bode").slideToggle();
  });
  
   $('#mostra2').click(function(){
  $("#bode2").slideToggle();
  });
  
  
$('#mostra3').click(function(){
  $("#bode3").slideToggle();
  });
  
});


</script>

<script>
    function enviar() {
        var linha = $("#lista").val();
        var proxy = $("#proxy").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
        var ed = 0;
        var rp = 0;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
                	var e = document.getElementById("gate");
              var gate = e.options[e.selectedIndex].value;
                    $.ajax({
                        url: gate + '?lista=' + value + '&proxy=' + proxy,
                        type: 'GET',
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("#CHARGED")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else if(resultado.match("#LIVE")) {
                                removelinha();
                                ed++;
                                edrovadas(resultado + "");
                           }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }
                            $('#carregadas').html(total);
                            var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cWarn').html(ed);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cWarn2').html(ed);
                            $('#cDie2').html(rp);
                        }
                    });
                }, 2500 * index);
        });
    }
    function aprovadas(str) {
        $(".aprovadas").append(str + "");
    }
    function reprovadas(str) {
        $(".reprovadas").append(str + "");
    }
    function edrovadas(str) {
        $(".edrovadas").append(str + "");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>


</html>2020-2024. ALL RIGHTS RESERVED.