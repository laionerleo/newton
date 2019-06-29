

<!doctype html>

<html class="no-js" lang="zxx">

    
<!-- Mirrored from www.innovationplans.com/idesign/daniels/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2019 15:42:32 GMT -->
<head>

    	<!-- metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       	<meta name="description" content="Daniels is a responsive creative template">
        <meta name="keywords" content="portfolio, personal, corporate, business, parallax, creative, agency">
        <script src="http://nerdamer.com/js/nerdamer.core.js"></script>
        <script src="http://nerdamer.com/js/Algebra.js"></script>
        <script src="http://nerdamer.com/js/Calculus.js"></script>

		<!-- title -->
		<title>Newton Rapson</title>

		<!-- favicon -->
        <link href="<?php echo base_url(); ?>application/assets/img/favicon.ico" rel="icon" type="image/png">

        <!-- bootstrap css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800" rel="stylesheet">

		<!-- owl carousel CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/owl.theme.default.min.css">

		<!-- magnific-popup CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/magnific-popup.css">

		<!-- animate.min CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/animate.min.css">

		<!-- Font Icon Core CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/et-line.css">
		

		<!-- Core Style Css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/style.css">

        <!--[if lt IE 9]-->
		<script src="<?php echo base_url(); ?>application/assets/js/html5shiv.min.js"></script>
		<!--[endif]-->
			<!-- demo-------------------------------------------------------------------------- -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/assets/examples/css/tables/datatable.min599c.css?v4.0.2">

	

    </head>
    
    <body>
<script>
	var array= [];
	var d ='';
	var i = 0;
		function Metodo() {		
							// primero obtener la equacion la pondremos en la variable a
						//	var a=	'(e^x)-(sin(x))-2';
						 	
							var a=$('#inp_ecuacion').val();
							console.log(a);
							//var a1 = nerdamer.convertToLaTeX(a);
							//console.log(a1.toString());
							//  obtendremos la toleracia que la pondremos en la variable Ea
							var Es= $('#inp_tolerancia').val(); //0.0001;//tolerancia
							var Ea= 0;
							// aqui esta el valor xi 
							var xi =$('#inp_xi').val();
							// i sera ll variable que nos dira el numero de iteraciones
							
							//	xd sera la derivada de a
							var xd=nerdamer.diff(a, 'x');
							console.log(xd.symbol.value);
							//fxi es el valor de reemplazar xi en la function a
							var fxi = nerdamer(a,{x:xi}).evaluate();
							//fdxi es el valor de reemplazar xi en la funcion xd 
							var fdxi = nerdamer(xd,{x:xi}).evaluate();
							array.push(i);
							array.push(xi);
							
								// metodo newton rapson
								var xi1=  xi-(fxi/fdxi);
								//alert(xi1);
								array.push(xi1);
								Ea=xi-xi1;
								array.push(Ea);

								//----
									while(Ea>Es){
										i++;
										array.push(i);
										xi=xi1;
										array.push(xi);
										//alert(xi);					//fxi es el valor de reemplazar xi en la function a
										var fxi = nerdamer(a,{x:xi}).evaluate();
										//fdxi es el valor de reemplazar xi en la funcion xd 
										var fdxi = nerdamer(xd,{x:xi}).evaluate();
										var xi1=  xi-(fxi/fdxi);
										array.push(xi1);
										console.log(xi1);
										Ea=xi-xi1;
										array.push(Ea);
										console.log(Ea);

										//alert("es menor");

									}

									
									cargartabla();
							


			}

</script>
    
	    <div class="loading">
			<div class="load-circle">
			</div>
		</div>
	

		<!-- ====== Navgition ======  -->
		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-icon-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		       <!-- logo -->
		      <a class="logo" href="#">Newton Raphson</a>

		    </div>

		    <!-- Collect the nav links, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="nav-icon-collapse">
		      
			  <!-- links -->
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" data-scroll-nav="0" class="active">Home</a></li>
		        <li><a href="#" data-scroll-nav="1">About</a></li>
		        <li><a href="#" data-scroll-nav="2">Comandos</a></li>
		        <li><a href="#" data-scroll-nav="4">Integrantes</a></li>
		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
		<!-- ====== End Navgition ======  -->

		<!-- ====== Header ======  -->
		<section id="home" class="header" data-scroll-index="0" style="background-image: url(<?php echo base_url(); ?>application/assets/lg.gif);" data-stellar-background-ratio="0.8">

			<div class="v-middle">
				<div class="container">
					<div class="row">

						<!-- caption -->
						<div class="caption">
							<h5>Newton Raphson</h5>
							<h1 class="cd-headline clip">
					            <span class="blc"></span>
					            <span class="cd-words-wrapper">
					              <b class="is-visible">Leonardo Ayala cayo</b>
					              <b>Roger Andrés Villarroel Chonono</b>
					              
					            </span>
			        </h1>
					

			          		<!-- social icons -->
			          		<div class="social-icon">
			          			<a href="#0">
			          				<span><i class="fa fa-facebook" aria-hidden="true"></i></span>
			          			</a>
			          			<a href="#0">
			          				<span><i class="fa fa-twitter" aria-hidden="true"></i></span>
			          			</a>
			          			<a href="#0">
			          				<span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
			          			</a>
			          			<a href="#0">
			          				<span><i class="fa fa-behance" aria-hidden="true"></i></span>
			          			</a>
			          			<a href="#0">
			          				<span><i class="fa fa-youtube" aria-hidden="true"></i></span>
			          			</a>
			          		</div>
						</div>
						<!-- end caption -->
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Header ======  -->

		<!-- ====== Hero ======  -->
	
		<!-- ====== End Hero ======  -->

		<!-- ====== Services ======  -->
		<section class="services section-padding bg-gray text-center pb-70" data-scroll-index="2">
			<div class="container">

				<!-- section heading -->
				<div class="section-head">
					<h3>Services.</h3>
				</div>

				<div class="row">

					<!-- items -->
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
							<h6>Web Design</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
							<h6>Branding</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-umbrella" aria-hidden="true"></i></span>
							<h6>Development</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
							<h6>Creative Design</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-television" aria-hidden="true"></i></span>
							<h6>Fully Responsive</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-camera" aria-hidden="true"></i></span>
							<h6>Retina Ready</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
							<h6>Creative Design</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-television" aria-hidden="true"></i></span>
							<h6>Fully Responsive</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-camera" aria-hidden="true"></i></span>
							<h6>Retina Ready</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Services ======  -->

		<!--====== Portfolio ======-->
		<section class="portfolio section-padding pb-70" data-scroll-index="3">
			<div class="container">
						<div id="cabezera" >
								<div class="messages"></div>

		                    <div class="controls">

		                      <div class="row">
		                            <div class="col-md-5">
		                                <div class="form-group">
																			<label> EQUACION</label>
		                                    <input id="inp_ecuacion" type="text" name="inp_ecuacion" placeholder="xxxx" required="required">
		                                </div>
		                            </div>

		                             <div class="col-md-3">
		                                <div class="form-group">
		                                    <input id="inp_tolerancia" type="number" name="inp_tolerancia" placeholder="0.0001" required="required">
		                                </div>
																</div>
																<div class="col-md-3">
																			<div class="form-group">
																			<input id="inp_xi" type="number" name="inp_xi" placeholder="00000" required="required">
																			</div>
																</div>
		                        
		                            <div class="col-md-3">
																		
																		<Button onclick="Metodo()" class="buton buton-bg">Buttom</Button>
		                            </div>
		                        </div>
		                    
		        
						</div>
						<div id="tabla">
						<div class="panel-body">
          <table id="idtabla" class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
            <thead>
              <tr>
							<th>#</th>
                <th>X-i</th>
                <th>X-i+1</th>
                <th>Error</th>
                
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>X-i</th>
                <th>X-i+1</th>
                <th>Error</th>
                
              </tr>
            </tfoot>
            <tbody>
						<tr class="table-active">
						<td scope="row"></td>
          	</tr>
            
            </tbody>
          </table>
        </div>

						</div>
			</div>

			
			<!-- /container -->
		</section>
		<!--====== End Portfolio ======-->

		<!--====== Clients ======-->
		<section class="clients section-padding bg-gray" data-scroll-index="4">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Testimonials.</h3>
					</div>

					<!-- owl carousel -->
					<div class="col-md-offset-1 col-md-10">
						<div class="owl-carousel owl-theme text-center">

							<!-- citems -->
							<div class="citem">
								<div class="author-img">
									<img src="<?php echo base_url(); ?>application/assets/foto1.jpg" alt="">
								</div>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<h6>Alex Smith</h6>
								<span>Envato Customer</span>
							</div>

							<div class="citem">
								<div class="author-img">
									<img src="<?php echo base_url(); ?>application/assets/foto2.jpg" alt="">
								</div>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<h6>Alex Smith</h6>
								<span>Envato Customer</span>
							</div>

					
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End clients ======-->

		<!--====== Numbers ======-->
		<div class="numbers section-padding text-center pb-70">
			<div class="container">
				<div class="row">

					<!-- items -->
					<div class="col-md-3">
						<div class="item">
							<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
							<h3 class="counter">850</h3>
							<p>Happy Customers</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="item">
							<span class="icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
							<h3 class="counter">230</h3>
							<p>Complete Projects</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="item">
							<span class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
							<h3 class="counter">9450</h3>
							<p>Lines Of Code</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="item">
							<span class="icon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
							<h3 class="counter">780</h3>
							<p>Files Downloaded</p>
						</div>
					</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</div>
		<!--====== End Numbers ======-->

		<!--====== Blog ======-->
		<section class="blog section-padding bg-gray" data-scroll-index="5">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Our Blog.</h3>
					</div>

					<!-- owl carsouel -->
					<div class="owl-carousel owl-theme">

						<!-- pitems -->
						<div class="pitem">
							<div class="post-img">
								<img src="<?php echo base_url(); ?>application/assets/foto1.JPG" alt="">
							</div>
							<div class="content">
								
								<h4>
									<a href="#0">Roger Andrés Villarroel </a>
								</h4>
								<span class="more">
									<a href="#0">Read More</a>
								</span>
							</div>
						</div>

						<div class="pitem">
							<div class="post-img">
								<img src="<?php echo base_url(); ?>application/assets/foto2.jpg" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									<a href="#0">Leonardo ayala cayo</a>
								</h6>
								<h4>
									<a href="#0">Leonardo Ayala Cayo</a>
								</h4>
								<span class="more">
									<a href="#0">Read More</a>
								</span>
							</div>
						</div>

					</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</section>
	
		<!--====== End Blog ======-->

		<!--====== Contact ======-->
		<!--====== End Contact ======-->

		<!--====== Footer ======-->
		<footer>
			<div class="container text-center">
				<div class="row">
					<p>Copy Right 2018 &copy; By Daniels All Rights Reserved</p>
				</div>
			</div>
		</footer>
		<!--====== End Footer ======-->



       
        <!-- jQuery -->
		<script src="<?php echo base_url(); ?>application/assets/code.jquery.com/jquery-3.0.0.min.js"></script>
		<script src="<?php echo base_url(); ?>application/assets/code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

	  	<!-- bootstrap -->
		<script src="<?php echo base_url(); ?>application/assets/js/bootstrap.min.js"></script>

		<!-- scrollIt -->
		<script src="<?php echo base_url(); ?>application/assets/js/scrollIt.min.js"></script>

		<!-- magnific-popup -->
		<script src="<?php echo base_url(); ?>application/assets/js/jquery.magnific-popup.min.js"></script>

		<!-- owl carousel -->
		<script src="<?php echo base_url(); ?>application/assets/js/owl.carousel.min.js"></script>

		<!-- stellar js -->
		<script src="<?php echo base_url(); ?>application/assets/js/jquery.stellar.min.js"></script>

		<!-- animated.headline -->
		<script src="<?php echo base_url(); ?>application/assets/js/animated.headline.js"></script>

      	<!-- jquery.waypoints.min js -->
	  	<script src="<?php echo base_url(); ?>application/assets/js/jquery.waypoints.min.js"></script>

	  	<!-- jquery.counterup.min js -->
	  	<script src="<?php echo base_url(); ?>application/assets/js/jquery.counterup.min.js"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="<?php echo base_url(); ?>application/assets/js/isotope.pkgd.min.js"></script>

      	<!-- validator js -->
      	<script src="<?php echo base_url(); ?>application/assets/js/validator.js"></script>

      	<!-- custom script -->
				<script src="<?php echo base_url(); ?>application/assets/js/custom.js"></script>
				
				
				<script>
		
			function cargartabla(){
				var myJsonString = JSON.stringify(array);
				console.log(myJsonString);
			for (var j = 0; j < i; j++) {
					d+= '<tr>'+
					'<td>'+array.pop()+'</td>'+
					'<td>'+array.pop()+'</td>'+
					'<td>'+array.pop()+'</td>'+
					'<td>'+array.pop()+'</td>'+
					'</tr>';
						
				}
				$("#idtabla").append(d);
					
			}

    </script>
<!-- Bootstrap Core JavaScript -->

    </body>

<!-- Mirrored from www.innovationplans.com/idesign/daniels/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2019 15:43:09 GMT -->
</html>
