<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'titlepage' => 'صفحه اصلی'
      ];

      $this->view('pages/index', $data);
    }

    public function about_us(){
      $data = [
        'titlepage' => 'درباره ما'
      ];

      $this->view('pages/about', $data);
    }

      public function contact_us(){
          $data = [
              'titlepage' => 'c Us'
          ];

          $this->view('pages/contact-us', $data);
      }

      public function login(){
          if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
          }
          $client = new SoapClient('http://192.168.30.122/Yekta_Dashboard.asmx?wsdl');
    $param = array('user' => $username ,'pass' => $password,'feature' => 'SOAP_SINGLE_ELEMENT_ARRAYS');
    $result  = $client->GetCheckAccount($param);
    $outterArray  = ((array)$result);
    $innerArray  = ((array)$outterArray['GetCheckAccountResult']);
    $data = ((array)$innerArray['Error']);
    foreach ($data as $key){
        $key;
    }
    switch ($key){
        case '1':
            $error = "نام کاربری یا رمز عبور برابر نیست";
            break;
        case '2':
            $error =  "کاربری شما غیرفعال است";
            break;
        case '3':
            $error = "حساب کاربری شما منقضی شده است";
            break;
        case '0':
            $dataArray = ((array)$innerArray['listObject']);
            foreach($dataArray as $holdingObject)
            {
                $holdingArray = ((array)$holdingObject);
                $name = $holdingArray['AshName'];
                $family = $holdingArray['AshFamily'];
                $password = $holdingArray['AccPassWord'];
                $username2 = $holdingArray['AccUserName'];
                $asrremain = $holdingArray['AsrRemain'];
                $curname = $holdingArray['CurName'];
            }
              session_start();
              $_SESSION['loggedIn'] = 1;
              $_SESSION['name'] = $name ;
              $_SESSION['family'] = $family;
              $_SESSION['asrremain'] = $asrremain;
              $error = "ورود موفق";
            break;
    }

          if(empty($password) || empty($username)){
            exit('نام کاربری و رمزعبور نمی تواند خالی باشد');
          }
          if( $username > 11){
            exit('تعداد کاراکتر موبایل کم است');
          }
          if($key == 0){
            exit('success');
          } else
            exit($error);

      }


        public function logout(){
          echo'test';
          session_start();
          unset($_SESSION['loggedIn']);
          session_destroy();
          header('Location: /');
          exit();
        }



      public function register(){
        if(isset($_POST['register'])) {
          $username = $_POST['username2'];
          $password = $_POST['password2'];
        }
        $url = "http://192.168.30.122/Yekta_Dashboard.asmx?wsdl";
        $context = stream_context_create(array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
       ));
        $client = new SoapClient($url, array('stream_context' => $context));
        $param = array('username' => $username ,'password' => $password,'feature' => 'SOAP_SINGLE_ELEMENT_ARRAYS', 'verifyhost' => false);
        $result  = $client->RegisterAshkhas($param);
        $outterArray  = ((array)$result);
        $innerArray  = ((array)$outterArray['RegisterAshkhasResult']);
        $array2 = json_decode(json_encode($innerArray), True);
        $Array3  = ((array)$array2);
        $Array4  = ($Array3['AshVcCode']);
        $Array5  = ($Array3['Error']);

        echo 'ثبت نام با موفقیت انجام شد کد تایید شما ' . $Array4 . 'می باشد';
        // echo $Array4;
      }
  }
