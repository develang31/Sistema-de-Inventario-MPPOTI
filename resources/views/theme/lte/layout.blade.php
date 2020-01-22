<html>
 <head> 
 <meta charset="utf-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <title>AdminLTE 3 | Boxed Layout</title> 
 <!-- Tell the browser to be responsive to screen width --> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <!-- Font Awesome --> 
 <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}"> 
 <!-- Ionicons --> 
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
 <!-- Theme style --> 
 <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}"> 
 <!-- Google Font: Source Sans Pro --> 
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
 <!-- Select2 -->
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
 <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
 <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">	

 @yield('styles')

 <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">

 </head> 	
 
<body class="hold-transition sidebar-mini layout-boxed"> 
 <!-- Site wrapper --> 
 <div class="wrapper"> 
 <!-- Inicio navbar-->
 @include("theme/$theme/navbar")
 <!-- Fin navbar-->			
 <!-- Inicio aside-->
 @include("theme/$theme/aside")
 <!-- Fin aside-->
			
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Main content -->
   <section class="content">
      @yield('contenido')
   </section>
  </div>
			
 <!-- Inicio footer-->
 @include("theme/$theme/footer")
 <!-- Fin footer-->			
 </div>		
  <!-- jQuery --> 
  <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script> 
  <!-- Bootstrap 4 --> 
  <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script> 
  <!-- AdminLTE App --> 
  <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script> 
  <!-- AdminLTE for demo purposes --> 
  <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>   
  <!-- Select2 -->
  <script src="{{asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>
  <!--Plugins -->
  @yield("scriptsPlugins")
  <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
  <script src="{{asset("assets/js/funciones.js")}}"></script>
  @yield("scripts") 
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    
  })
</script>
</body>
</html>
