<?php
try {
    $sql = "SELECT * FROM secret_word";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $data = $q->fetch();

    $secret_word = $data['secret_word'];
	} catch (PDOException $e) {

	    throw $e;
	}

$sql = "SELECT * FROM interns_data where name='Bashorun Mazeed' ";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $my_data = $q->fetch();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bashorun Mazeed Profile Page</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		#page{
			margin-top: 50px;
			padding-top: 30px;
			padding-bottom: 20px;
			background-color: white;
		}
		h2,h3,h4{
			color: #a8a8a8;
		}

		body
		{
		font-family: 'Open Sans', sans-serif;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li + li {
		    margin-top: 4px;
		}
		.popup-box-on {
		    display: block !important;
		}
		a:focus {
		    outline: none;
		    outline-offset: 0px;
		}
		.popup-head-left.pull-left h1 {
		    color: #f7f;
		    float: left;
		    font-family: oswald;
		    font-size: 18px;
		    margin: 2px 0 0 5px;
		   
		}
		.popup-head-left a small {
		    display: table;
		    font-size: 11px;
		    color: #fff;
		    line-height: 4px;
		    opacity: 0.5;
		    padding: 0 0 0 7px;
		}
		.chat-header-button {
		    background: transparent none repeat scroll 0 0;
		    border: 1px solid #fff;
		    border-radius: 7px;
		    font-size: 15px;
		    height: 26px;
		    opacity: 0.9;
		    padding: 0;
		    text-align: center;
		    width: 26px;
		}
		.popup-head-right {
		    margin: 9px 0 0;
		}
		.popup-head .btn-group {
		    margin: -5px 3px 0 -1px;
		}
		.gurdeepoushan .dropdown-menu {
		    padding: 6px;
		}
		.gurdeepoushan .dropdown-menu li a span {
		    border: 1px solid;
		    border-radius: 50px;
		    display: list-item;
		    font-size: 19px;
		    height: 40px;
		    line-height: 36px;
		    margin: auto;
		    text-align: center;
		    width: 40px;
		}
		.gurdeepoushan .dropdown-menu li {
		    float: left;
		    text-align: center;
		    width: 33%;
		}
		.gurdeepoushan .dropdown-menu li a {
		    border-radius: 7px;
		    font-family: oswald;
		    padding: 3px;
		   transition: all 0.3s ease-in-out 0s;
		}
		.gurdeepoushan .dropdown-menu li a:hover {
		    background:#304445 none repeat scroll 0 0 !important;
		    color: #fff;
		}
		.popup-head {
		    background: #304445 none repeat scroll 0 0 !important;
		    border-bottom: 3px solid #ccc;
		    color: #fff;
		    display: table;
		    width: 100%;
		    padding: 8px;
		}
		.popup-head .md-user-image {
		    border: 2px solid #5a7172;
		    border-radius: 12px;
		    float: left;
		    width: 44px;
		}
		.uk-input-group-addon .glyphicon.glyphicon-send {
		 	color: rgb(24, 157, 14);;
		    font-size: 25px;
		    line-height: 36px;
		    padding-left: 16px;
		}

		.chat_box_wrapper.chat_box_small.chat_box_active {
		    
		    height: 342px;
		    overflow-y: scroll;
		    width: 316px;
		}
		aside {
		     background-attachment: fixed;
		    background-clip: border-box;
		    background-color: rgba(0, 0, 0, 0);
		    background-origin: padding-box;
		    background-position: center top;
		    background-repeat: repeat;
		    border: 1px solid #304445;
		    bottom: 0;
		    display: none;
		    height: 466px;
		    position: fixed;
		    right: 70px;
		    width: 300px;
		    font-family: 'Open Sans', sans-serif;
		}
		.chat_box {
		    padding: 16px;
		}
		.chat_box .chat_message_wrapper::after {
		    clear: both;
		}
		.chat_box .chat_message_wrapper::after, .chat_box .chat_message_wrapper::before {
		    content: " ";
		    display: table;
		}
		.chat_box .chat_message_wrapper .chat_user_avatar {
		    float: left;
		}
		.chat_box .chat_message_wrapper {
		    margin-bottom: 32px;
		}
		.md-user-image {
		    border-radius: 50%;
		    width: 34px;
		}
		img {
		    border: 0 none;
		    box-sizing: border-box;
		    height: auto;
		    max-width: 100%;
		    vertical-align: middle;
		}
		.chat_box .chat_message_wrapper ul.chat_message, .chat_box .chat_message_wrapper ul.chat_message > li {
		    list-style: outside none none;
		    padding: 0;
		}
		.chat_box .chat_message_wrapper ul.chat_message {
		    float: left;
		    margin: 0 0 0 20px;
		    max-width: 77%;
		}
		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li:first-child::before {
		    border-right-color: #616161;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li:first-child::before {
		    border-color: transparent #ededed transparent transparent;
		    border-style: solid;
		    border-width: 0 16px 16px 0;
		    content: "";
		    height: 0;
		    left: -14px;
		    position: absolute;
		    top: 0;
		    width: 0;
		}
		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li {
		    background: #FCFBF6 none repeat scroll 0 0;
		    color: #000000;
		}
		.open-btn {
		    border: 2px solid #189d0e;
		    border-radius: 32px;
		    color: #189d0e !important;
		    display: inline-block;
		    margin: 10px 0 0;
		    padding: 9px 16px;
		    text-decoration: none !important;
		    text-transform: uppercase;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li {
		    background: #ededed none repeat scroll 0 0;
		    border-radius: 4px;
		    clear: both;
		    color: #212121;
		    display: block;
		    float: left;
		    font-size: 13px;
		    padding: 8px 16px;
		    position: relative;
		    word-break: break-all;
		}
		.chat_box .chat_message_wrapper ul.chat_message, .chat_box .chat_message_wrapper ul.chat_message > li {
		    list-style: outside none none;
		    padding: 0;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li {
		    margin: 0;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li p {
		    margin: 0;
		}
		.chat_box .chat_message_wrapper.chat_message_right .chat_user_avatar {
		    float: right;
		}
		.chat_box .chat_message_wrapper.chat_message_right ul.chat_message {
		    float: right;
		    margin-left: 0 !important;
		    margin-right: 24px !important;
		}
		.chat_box.chat_box_colors_a .chat_message_wrapper.chat_message_right ul.chat_message > li:first-child::before {
		    border-left-color: #E8FFD4;
		}
		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li:first-child::before {
		    border-right-color: #FCFBF6;
		}
		.chat_box .chat_message_wrapper.chat_message_right ul.chat_message > li:first-child::before {
		    border-color: transparent transparent transparent #ededed;
		    border-width: 0 0 29px 29px;
		    left: auto;
		    right: -14px;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li:first-child::before {
		    border-color: transparent #ededed transparent transparent;
		    border-style: solid;
		    border-width: 0 29px 29px 0;
		    content: "";
		    height: 0;
		    left: -14px;
		    position: absolute;
		    top: 0;
		    width: 0;
		}
		.chat_box.chat_box_colors_a .chat_message_wrapper.chat_message_right ul.chat_message > li {
		    background: #E8FFD4 none repeat scroll 0 0;
		}
		.chat_box .chat_message_wrapper ul.chat_message > li {
		    background: #ededed none repeat scroll 0 0;
		    border-radius: 12px;
		    clear: both;
		    color: #212121;
		    display: block;
		    float: left;
		    font-size: 13px;
		    padding: 8px 16px;
		    position: relative;
		}
		.gurdeep-chat-box {
		    background: #fff none repeat scroll 0 0;
		    border-radius: 5px;
		    float: left;
		    padding: 3px;
		}
		#message {
		    background: transparent none repeat scroll 0 0;
		    border: medium none;
		    padding: 4px;
		    width: 200px;
		}
		.gurdeep-chat-box i {
		    color: #333;
		    font-size: 21px;
		    line-height: 1px;
		}
		.chat_submit_box {
		    bottom: 0;
		    box-sizing: border-box;
		    left: 0;
		    overflow: hidden;
		    padding: 10px;
		    position: absolute;
		    width: 100%;
		}
		.uk-input-group {
		    border-collapse: separate;
		    display: table;
		    position: relative;
		}
	</style>
</head>
<body style="background-color: rgba(184, 196, 196, 0.5);">

   <div class="container">
   		<div id="page" class="row">
   			<center>
				<h2>HNG 4.0 INTERN</h2><br>
			 </center>
	   		<div class="col-md-5 col-xs-12">
	   			<img src="http://res.cloudinary.com/mazbash/image/upload/v1524669768/me.jpg" class="img-responsive center-block">
	   		</div>
	   		
	   		<div class="col-md-7 col-xs-12">
	   			<h3><b> NAME :</b> <?php echo $my_data['name']; ?></h3>
				<h3> <b> USERNAME: </b> <?php echo $my_data['username']; ?></h3>
				<h3><b> EMAIL : </b>bashorun.mazeed@gmail.com</h3>
				<h4><b> FAVORITE QUOTE: </b>"Every great developer you know got there by solving problems they were unqualified to solve until they actually did it." <br><span> Patrick McKenzie </span></h4>
	   		</div><br>

	   		<center>
	   			<h2 style="color: rgb(24, 157, 14);"><i aria-hidden="true" class="fa fa-comments"></i> ChatBot </h2>
		        <div class="round hollow text-center">
		        	<a href="#" class="open-btn" id="addClass"><i class="fa fa-comments" aria-hidden="true"></i> Click Here</a>
		        </div>
	        </center>
	   	</div>
   </div>

	<aside id="sidebar_secondary" class="tabbed_sidebar ng-scope chat_sidebar">

	<div class="popup-head">
    	<div class="popup-head-left pull-left">
			<img class="md-user-image" src="http://res.cloudinary.com/mazbash/image/upload/v1524669768/me.jpg" alt="Bash">
			<h1>Bashrun Mazeed</h1><small><br> <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Web Developer</small>
		</div>
		  <div class="popup-head-right pull-right">
				<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-remove"></i></button>
          </div>
	</div>

	<div id="chat" class="chat_box_wrapper chat_box_small chat_box_active" style="opacity: 1; display: block; transform: translateX(0px);">
        <div class="chat_box touchscroll chat_box_colors_a">
          <!--   <div class="chat_message_wrapper chat_message_right">
                <div class="chat_user_avatar">
                    <span>Bash Bot</span>
                    <img  src="http://res.cloudinary.com/mazbash/image/upload/v1524669768/me.jpg" class="md-user-image">
                </div>
                <ul class="chat_message">
                    <li>
                        <p>A testLorem ipsum dolor sit amet, consectetur. </p>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
	<div class="chat_submit_box">
	    <div class="uk-input-group">
	        <div class="gurdeep-chat-box">
	        	<input type="text" placeholder="Type a message" id="message"  class="lg-input">
	        </div>
		    <span class="uk-input-group-addon">
		    	<button type="button" id="submit_message"><i class="glyphicon glyphicon-send"></i></button>
		    </span>
	    </div>
	</div>


<script type="text/javascript">
	$(function(){
		$("#addClass").click(function () {
			$('#sidebar_secondary').addClass('popup-box-on');

			var firstLoad = true;

			if (firstLoad === true && $('.popup-box-on').hasClass('hidden') === false) {
				firstLoad = false;
                    var message1 = window.setTimeout(function(){
                        var default_message = '<div class="chat_message_wrapper chat_message_right"> <div class="chat_user_avatar"> <span>Bash Bot</span>      <img  src="http://res.cloudinary.com/mazbash/image/upload/v1524669768/me.jpg" class="md-user-image"> </div> <ul class="chat_message"> <li> <p>Hello I\'m BashBot, <br> I\'m here to help you type your message. </p> </li>  </ul>  </div>';
                        $('.chat_box').append(default_message);
                        window.clearTimeout(message1);
                    }, 1000);
			}

			$("#removeClass").click(function () {
				$('#sidebar_secondary').removeClass('popup-box-on');
	    	});
	    });	
	})

	//If user sends a message
    $("#message").keypress(function(e) {
        if (e.keyCode == 13 && !e.shiftKey) {
            $("#submit_message").click();
        }
        if (e.keyCode == 38 && !e.shiftKey) {
            // get the last message sent by the user
            $('#message').val($('.chat_box').children('.chat_message_wrapper').last()[0].innerText);
        }
    });

    // $("#submit_message").click(function() {
    //     var usermsg = $("#message").val().trim();

    //     if (usermsg != '') {
    //         var msg='<div class="chat_message_wrapper"><div class="chat_user_avatar"><img src="https://res.cloudinary.com/funsholaniyi/image/upload/v1524159157/default.jpg" class="md-user-image"><span>You</span></div><ul class="chat_message"><li><p>'+
    //             usermsg.replace(/\n/g, '<br />') +
    //             '</p></li></ul></div>';

    //         $('.chat_box').append(msg);
    //         $('#message').val('').focus();
    //         $('.chat_box').animate({scrollTop: $('#message').get(0).scrollHeight}, 1100); 

    //         $.ajax({
    //             url: 'profiles/BashorunMazeed.php',
    //             type: 'post',
    //             dataType: 'json',
    //             data: {message: usermsg},
    //             success: function(response){
    //                 var received_message = '<div class="chat_message_wrapper chat_message_right"> <div class="chat_user_avatar"> <span>Bash Bot</span>      <img  src="http://res.cloudinary.com/mazbash/image/upload/v1524669768/me.jpg" class="md-user-image"> </div> <ul class="chat_message"> <li> <p>'+
    //                     response.message
    //                     +'</p> </li>  </ul>  </div>';

    //                 $('.chat_box').append(received_message);
    //                 playMessageSound();

    //                 var height = 0;
    //                 $('.chat_box .chat_message_wrapper').each(function(i, value){
    //                     height += parseInt($(this).height());
    //                 });

    //                 height += '';

    //                 $('.chat_box').animate({scrollTop: height});
    //             }
    //         });
    //     }

    //     return false;
    // });
</script>
</body>
</html>
<?php } ?>