<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    {{-- navigation bar --}}
    <section id="" class="container">
<form  class="shaped-form-extended account-form web-account-form" method="post" novalidate="novalidate">
    <div class="shaped-form-extended-block">
        <div class="shaped-form-extended-block-caption">
            <h3>Please Log In</h3>
        </div>

        <div class="shaped-form-extended-block-content" style="min-height: 285px;">
            <div class="account-form-alert">
                
            </div>
            <div class="form-group">
                <input autocomplete="email" class="form-control" data-val="true" data-val-regex="Characters '<', '>' are not allowed." data-val-regex-pattern="[^<>]+" data-val-required="The Email Address field is required" id="LoginOrEmail" name="LoginOrEmail" placeholder="Enter a valid email address" type="text" value="">
                <div><span class="field-validation-valid" data-valmsg-for="LoginOrEmail" data-valmsg-replace="true"></span></div>
            </div>
            <div class="form-group">
                <input autocomplete="current-password" class="form-control" data-val="true" data-val-required="The Password field is required" id="Password" name="Password" placeholder="Password" type="password">
                <div><span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span></div>
            </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6 checkbox">
                            <label class="checkbox"><input data-val="true" data-val-required="The Remember Me field is required." id="RememberMe" name="RememberMe" type="checkbox" value="true">
                            <input name="RememberMe" type="hidden" value="false">Remember Me
                            </label>                        
                        </div>
                        <div class="col-xs-6">
                            <div class="pull-right" style="margin-top: 10px;">
                                <a href="/Editor/Account/RequestResetPasswordLink" id="forgotlink" rel="nofollow" target="_self">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <button type="submit" class="default-button" id="loginbutton">Log In</button>
                <div class="form-btn-link" style="margin-left: 15px; display: inline-block;">
                    <a class="dialog-link" href="/Editor/Account/Register" rel="nofollow">Don't have an account?</a>
                </div>
            </div>
            <br>
                <div class="form-group">
                    <span class="terms">
                         <a href="https://nicepage.com/Privacy" target="_blank">Privacy Policy</a>
                    </span>
                </div>
        </div>
            <div class="shaped-form-extended-social-block-content">
                <div id="google-signin-button">
                    <div class="S9gUrf-YoZ4jf" style="position: relative;">
                        <div>
                        </div>
                    <iframe src="https://accounts.google.com/gsi/button?theme=filled_blue&amp;size=large&amp;text=signin_with&amp;width=250&amp;client_id=13150095650-mo8psu2colep6uv90a2mu6r87u87s35a.apps.googleusercontent.com&amp;iframe_id=gsi_36223_827751&amp;as=WcHyLfYmFLu3n4htYfQJSA&amp;hl=en" allow="identity-credentials-get" id="gsi_36223_827751" title="Sign in with Google Button" style="display: block; position: relative; top: 0px; left: 0px; height: 44px; width: 270px; border: 0px; margin: -2px -10px;">
                    </iframe>
                </div>
            </div>
                <button type="button" class="btn btn-social-small fb-btn" onclick="onFacebookLogin();">
                    Sign In with Facebook
                </button>
            </div>
    </div>
</form>

            </section>
	<script src="index.js"></script>
     <!-- jQuery (required for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Bootstrap JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>