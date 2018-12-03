
<?php
// @package Yektafelezweb
// Web server client in server Windows
 $client = new SoapClient('http://192.168.30.122/Yekta_Getinformation.asmx?wsdl',array('soap_version'   => SOAP_1_2));
// Parameter in webserver *user* & *password*
$param = array('username' => 'admin','password' => 'admin');

// Check in and set method detile to web server
$result  = $client->GetInformationTitle($param);
// Check in and set method active to web server
// Check array in method detile
$outterArray  = ((array)$result);
// Check array outter in method detile web service
$innerArray  = ((array)$outterArray['GetInformationTitleResult']);

// Check object in list of method detile
$dataArray  = ((array)$innerArray['listObject']);
//loop array in list object on detile
foreach($dataArray as $holdingObject)
{
    $holdingArray = ((array)$holdingObject);
    $title = $holdingArray['WebTitle'];
    $yektaabout = $holdingArray['WebSubTitle'];
}
?>
<section class="subheader container-fluid rtl">
    <div class="text-item">
      <div class="row">
  <div class="col-lg-6 col-xs-12">
      <div class="title-section my-lg-5 py-lg-5 my-5 px-lg-5">
          <h1><?php echo $title; ?></h1>
          <p><?php echo $yektaabout; ?></p>
          <a href="/">درباره یکتافلز</a>
      </div>
  </div>
  <div class="col-lg-6">
    <?php if(!isset($_SESSION['name'])){ ?>
      <div class="section-from my-lg-3 d-none d-sm-block">
        <div class="inner2">
          <div class="formindex active" data-tab="1">
            <div class="header">
              ورود به یکتافلز
            </div>
            <div class="contente my-3">
              <form action="login.php" method="post" id="login-form">
                <div id="error"></div>
                <div class="pb-3">
                  <label for="username">شماره موبایل</label>
                  <input type="text" class="fieldmob text-center" id="username" placeholder="شماره موبایل">
                </div>
                <div class="py-2">
                  <label for="password">رمزعبور</label>
                  <input type="password" class="fieldmob text-center" id="password" placeholder="رمز عبور">
                </div>
                <a href="#" class="small">رمز عبور خود را فراموش کرده ام</a><input type="button" class="submitbtn pull-left" value="ورود"  id="login">
              </form>
            </div>
            <div class="footer">
              کاربر جدید هستید؟  <a href="#" class="title-form" data-tab="2">ثبت نام</a>
            </div>
          </div>


          <div class="formindex" data-tab="2">
            <div class="header">
              ثبت نام در یکتافلز
            </div>
            <div class="contente my-1">
            <form action="register.php" method="POST" id="register-form">
              <div class="pb-1">
                <label for="username">شماره موبایل</label>
                <input type="text" class="fieldmob text-center" id="username1" placeholder="شماره موبایل">
              </div>
              <div class="py-1">
                <label for="password">رمزعبور</label>
                <input type="password" class="fieldmob text-center" id="password1" placeholder="رمز عبور">
              </div>
              <div class="py-1">
                <input type="password" class="fieldmob text-center" id="re_password" placeholder="تکرار رمز عبور">
              </div>
              <input type="button" class="submitbtn" value="ثبت نام"  id="register">
            </form>
          </div>
          <div class="footer">
            قبلا ثبت نام کرده اید؟  <a href="#" class="title-form" data-tab="1">ورود</a>
          </div>
      </div>
    <?php } ?>
  </div>
</div>
    </div>
  <div class="subheader-bg"></div>
</section>


<script type="text/javascript">
$(document).ready(function(){
  $("#login").on('click', function(){
    var username = $("#username").val();
    var password = $("#password").val();

    $.ajax(
      {
        url: 'pages/login',
        method:'POST',
        data: {
          login: 1,
          username: username,
          password: password
        },
        success: function (response) {
            $('#error').html(response);
            if (response.indexOf('success') >= 0)
            window.location = '/dashboard/';
        },
        dataType:'text'
      }
    );
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#register").on('click', function(){
    var username2 = $("#username1").val();
    var password2 = $("#password1").val();
    var re_password = $("#re_password").val();

    $.ajax(
      {
        url: 'pages/register',
        method:'POST',
        data: {
          register: 1,
          username2: username2,
          password2: password2
        },
        success: function (response) {
          $('#errorreg').html(response);

        },
        dataType:'text'
      }
    );
  });
});
</script>
