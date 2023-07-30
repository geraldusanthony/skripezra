<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 6px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<title>ORDER PAGE</title>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">
    <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-red w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4><b>ORDER PAGE</b></h4>
    <p class="w3-text-white">Welcome to order page!</p>
  </div>
</nav>
<nav class="w3-sidebar w3-collapse w3-red w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4><b>ORDER PAGE</b></h4>
    <p class="w3-text-white">Welcome to order page!</p>
  </div>
  <div class="w3-bar-block">
    <a href="orderoffline" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw w3-margin-right"></i>ORDER OFFLINE</a> 
    <a href="orderonline" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw w3-margin-right"></i>ORDER ONLINE</a>
    <a href="/loginpelayan" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>
  </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<div class="w3-container">
    <h1><b>Silahkan Isi Pesanan Pelanggan</b></h1>
  <header class="w3-container">
  <div class="w3-section w3-bottombar w3-padding-6">
    <div class="modal-body">
        <form action="/addorderoffline" method="POST" >
          {{csrf_field()}}
           <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Pesanan</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <select name="pesanan"class="select2 form-control" id="exampleFormControlSelect1">
                                                <option></option>
                                                @foreach($tambahmakanan as $tambahmakanan)
                                                <option>{{$tambahmakanan->nama_prdk}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="name" class="cols-sm-2 control-label">Nama Pelanggan</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <input id="exampleInputEmail1" type="text" placeholder="" class="form-control" name="nama" required autocomplete="" autofocus />
                                            </div>
                                            </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Qty</label>
                                        <div class="cols-sm-10">
                                            <div class="quantity">
                                            <input type='button' value='-' class='qtyminus minus' field='qty' />
                                            <input type='text' name='qty' value='1' class='qty' />
                                            <input type='button' value='+' class='qtyplus plus' field='qty' />
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <label for="name" class="cols-sm-2 control-label">Harga</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <input id="exampleInputEmail1" type="text" placeholder="" class="form-control" name="harga" required autocomplete="" autofocus />
                                            </div>
                                            </div>
                                        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-red">TAMBAH DATA</button>
        
      </form>
      
    </div>
</div>
  </header>
</div>    

</div>


<div class="w3-main" style="margin-left:300px">
<div class="w3-container">
  
<h1><b>MENU dan HARGA</b></h1>
<!-- First Photo Grid-->
<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="asset\images\sushi_3.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <p><b>Sushi Roll + Es Teh</b></p>
        <p>Paket lengkap sushi roll dengan es teh</p>
        <p>Rp 25.000,00</p>
        
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="asset\images\sushi_3.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <p><b>Sushi Original + Es Teh</b></p>
        <p>Paket lengkap sushi original dengan es teh</p>
        <p>Rp 22.000,00</p>
       
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="asset\images\sushi_3.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <p><b>Sushi Sashimi + Es Teh</b></p>
        <p>Paket lengkap sushi sashimi dengan es teh</p>
        <p>Rp 23.000,00</p>
        
      </div>
    </div>
   



 




 <!-- First Photo Grid-->
 
</div> 
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<!-- Your custom script here -->
<script type="text/babel">
jQuery(document).ready(($) => {
        $('.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val( val+1 ).change();
        });
 
        $('.quantity').on('click', '.minus', 
            function(e) {
            let $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            if (val > 0) {
                $input.val( val-1 ).change();
            } 
        });
    });
</script>

<script>
      function fun_remove() {
         var element = document.getElementById("id_dropdown");
         element.remove(element.selectedIndex);
      }
   </script>

<script>
    $('.select2').select2();
</script>

</body>
</html>