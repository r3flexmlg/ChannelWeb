<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviciul EvD Security Channels va ajuta sa creati intr-un mod interactiv un canal permanent.">
    <meta name="author" content="Anonymous.">
    <meta name="keywords" content="ts3,teamspeak3,channels,free,evd-security,romania">

    <title>EvD Security - Create your channel</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/animation.css" rel="stylesheet">
		<link href="css/checkbox/orange.html" rel="stylesheet">
		<link href="css/preview.css" rel="stylesheet">
		<link href="css/authenty.css" rel="stylesheet">
		<link href="css/notify.css" rel="stylesheet">

		<!-- Alertify css -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

		<!-- Font Awesome CDN -->
		<link href="netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style></head>
  <body style="">
		
	<section id="authenty_preview" style="height: 512px;">
		<section id="signin_main" class="authenty signin-main" style="height: 512px;">
			<div class="section-content">
				<div class="wrap">
					<div class="container">	  
						<div class="form-wrap">
							<div class="row">
								<div id="form_1" data-animation="bounceIn" class="animated bounceIn">
									<div class="form-header">
										<i class="fa fa-user"></i>
																				</div>
									<div class="form-main">
										<form method="post" action="crear.php">
											<div class="form-group"> 
											<input type="text" name="name" class="form-control" placeholder="Channel name" required="required" pattern="[a-zA-Z0-9\s]{4,22}" title="The name must be between 4 and 22 characters, not include symbols." value="">
											<input type="text" name="subname" class="form-control" placeholder="Sub-channel name" pattern="[a-zA-Z0-9\s]{4,22}" title="The name must be between 4 and 22 characters, not include symbols." value="">
											<input type="text" name="ChannelPass" class="form-control" placeholder="Channel password" pattern="{4,22}" title="The channel password must contain at least 4 characters." value="">
											<input id="uid_input" type="text" name="uid" class="form-control" placeholder="Your UniqueID" required="required" title="Unique UID must be between 25 and 50 characters." pattern="{25,50}" value="">								
											</div>
										<button id="signIn_1" type="submit" class="btn btn-block signin">Create your channel</button>
										</form>	
									</div>
									<div class="form-footer">
										<div class="row">
											<div class="col-xs-7">
												<i class="fa fa-unlock-alt"></i>
												<a href="#UniqueID" id="HowToUniqueID">Find UniqueID!</a>
											</div>
											<div class="col-xs-5">
												<i class="fa fa-check"></i>
												<a href="#ListaCanale" id="CreatedChannels">Channels</a>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="UniqueID" class="authenty signin-alt">
			<div class="section-content">
				<div class="wrap">
					<div class="container">
						<div class="title" data-animation="fadeInUp">
							<center>
								<p>How do I find my UniqueID?</p>
								<iframe width="853" height="480" src="https://www.youtube.com/embed/rutteRHoag0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</center>
						</div>
					</div>
				</div>
			</div>
		</section>

				<section id="ListaCanale" class="authenty password-recovery">
					<div class="section-content">
						<div class="wrap">
							<div class="container">
								<div class="form-wrap">
									<div class="row">
										<div class="col-xs-12 col-sm-3 brand" data-animation="fadeInUp">
											<h2>EvD Security</h2>
											<p>Rules & Requirements</p>
										</div>
										<div class="col-sm-1 hidden-xs">
											<div class="horizontal-divider"></div>
										</div>
										<div class="col-xs-12 col-sm-8 main" data-animation="fadeInLeft" data-animation-delay=".5s">

											<table class="table table-bordered">
													<tr class="danger">
													<th>Requirements and Rules for using the platform</th>
													</tr>
								</table>
											<p>
												Requirements :<br/>
												1.The platform can only be used by those who hold the Bronze level Trusted degree.<br/>
												2.Unless you previously owned a channel you will now be able to use the platform.<br/>
												Rules :<br/>
												1.Channels that do not have activity for up to 5 business days will be automatically deleted.<br/>
												2.Channel names will not contain obscene words or signs ($% ^ && -_ /?), Will be deleted or not accepted by the system.<br/>
												3.Only one channel is accepted on UniQID with the Bronze degree.<br/>
												4.Those who like spam, we are sorry, the Bronze degree will be granted by the server only when active for 30 minutes on the server.<br/><br/>
												Active platform from: 09.03.2016 Forked by R3flex 07/April/2020<br/>
												<br/>
										</p>

										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
			</section>
</section>

	  
    <!-- js library -->
		<script src="ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.icheck.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		
		<!-- Alertify js -->
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

		<!-- authenty js -->
		<script src="js/authenty.js"></script>
		
		<!-- preview scripts -->
		<script src="js/preview/jquery.malihu.PageScroll2id.js"></script>
		<script src="js/preview/jquery.address-1.6.min.js"></script>
		<script src="js/preview/scrollTo.min.js"></script>
		<script src="js/preview/init.js"></script>
		
		
		<!-- preview scripts -->
		<script>
			(function($) {
				
				// get full window size
				$(window).on('load resize', function(){
				    var w = $(window).width();
				    var h = $(window).height();

				    $('section').height(h);
				});		

				// scrollTo plugin
                $('#HowToUniqueID').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
				$('#CreatedChannels').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
				
				// set focus on input
				var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');
        
				if (firstInput != null) {
            firstInput.focus();
        }
				
				$('section').waypoint(function (direction) {
					var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
					target.focus();
				}, {
	          offset: 300
	      }).waypoint(function (direction) {
					var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
			  	target.focus();
	      }, {
	          offset: -400
	      });
				
				
				// animation handler
				$('[data-animation-delay]').each(function () {
	          var animationDelay = $(this).data("animation-delay");
	          $(this).css({
	              "-webkit-animation-delay": animationDelay,
	              "-moz-animation-delay": animationDelay,
	              "-o-animation-delay": animationDelay,
	              "-ms-animation-delay": animationDelay,
	              "animation-delay": animationDelay
	          });
	      });
				
	      $('[data-animation]').waypoint(function (direction) {
	          if (direction == "down") {
	              $(this).addClass("animated " + $(this).data("animation"));
	          }
	      }, {
	          offset: '90%'
	      }).waypoint(function (direction) {
	          if (direction == "up") {
	              $(this).removeClass("animated " + $(this).data("animation"));
	          }
	      }, {
	          offset: '100%'
	      });
			
			})(jQuery);
		
		// API Call
		var url = 'ts3_api.php';
		fetch(url, {
			method: 'post', // *GET, POST, PUT, DELETE, etc.
			headers: {
			"Content-Type": "application/json"
			},
			body: JSON.stringify({ 
				"function": 'Get_UID'
			})
  		})
		.then(function (response) {
			return response.json();
		})
		.then(function (data) {
			let entries = Object.values(data);
			console.log(entries);
			var uid = entries[0].client_unique_identifier;
			// If no matching clients were found.
			if (!uid) return;
			var uid_input = document.getElementById("uid_input"); 
			uid_input.value = uid;
			alertify.set('notifier','position', 'top-center');
			alertify.notify('Successfully retrieved client UID!', 'notify_retrieved_uid', 3);
		}).catch(function (err) {
			console.log(err);
		})
		
		</script>
  	</body>
</html>