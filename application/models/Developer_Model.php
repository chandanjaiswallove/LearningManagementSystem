<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();    
    }

    public function devLogin()
    {
        $uniqID = $_POST['developerUniqueId'];
        $devEmail = $_POST['loginEmail'];
        $devPassword = $_POST['loginPassword'];

         $developers = [
            [
                'email' => 'support@aidcom.in',
                'password' => 'Admin1234',
                'unique' => '9264453821'
            ],
            [
                'email' => 'chandan@gmail.com',
                'password' => 'RobinR2204',
                'unique' => '7292818092'
            ],
            [
                'email' => 'robin@aidcom.in',
                'password' => '1234',
                'unique' => '9199450345'
            ]
        ];

        if(isset($_POST['developerLogin']))
        {
            foreach ($developers as $dev)
            {
                if($dev['email'] === $devEmail && $dev['password'] === $devPassword && $dev['unique'] === $uniqID)
                {
                   $_SESSION['activeDeveloper'] = $uniqID;
                   redirect(base_url('developer_dashboard'));
                  //  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                  //  echo '<script type="text/javascript">
                  //   setTimeout(function () { 
                  //       swal("Login Success!","Welcome Onboard!\nNow access your dashboard seamlessly","success").then(function(){
                  //           window.location.href = "'.base_url('developer_dashboard').'";
                  //       });
                  //   }, 100);
                  // </script>';

                }
                else
                {
                    redirect(base_url('developer'));
                  //  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                  //  echo '<script type="text/javascript">
                  //   setTimeout(function () { 
                  //       swal("Login Failed!","Sorry Could not login. Credential Failed","error").then(function(){
                  //           window.location.href = "'.base_url('developer').'";
                  //       });
                  //   }, 100);
                  // </script>';
                }
            }
        }     

    }

    public function developerLogout()
    {        
        unset($_SESSION['activeDeveloper']);
        session_unset();
        session_destroy();
        redirect(base_url('developer'));
    }
    
}
?>
