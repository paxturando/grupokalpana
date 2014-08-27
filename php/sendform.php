<?php
    function sendForm(){
        //ini_set('display_errors','on');
        //error_reporting(E_ALL);
        require_once "Mail.php";

        $resultCampos = array();
        $resultCampos['fName'] = isset( $_POST['form-name'] ) && (strlen( $_POST['form-name'] ) > 0);
        $resultCampos['fApe'] = isset( $_POST['form-apellidos'] );
        $resultCampos['fTel'] = isset( $_POST['form-tel'] ) && (strlen( $_POST['form-tel'] ) > 0);
        $resultCampos['fEmpresa'] = isset( $_POST['form-empresa'] );
        $resultCampos['fWeb'] = isset( $_POST['form-web'] );
        $resultCampos['fCom'] = isset( $_POST['form-comentario'] ) && (strlen( $_POST['form-comentario'] ) > 0);
        $resultCampos['enviado'] = false;

        if( isset( $_POST['form-mail'] ) && (strlen( $_POST['form-mail']) == 0 ) ){
            $resultCampos['fMail'] = 1;
        }else{
            if( isset( $_POST['form-mail'] ) && !preg_match( '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $_POST['form-mail'] ) ){
                $resultCampos['fMail'] = 2;
            }else{
                $resultCampos['fMail'] = 0;
            }
        }

        //Condiciones para que se envíe el correo
        if( $resultCampos['fName'] && ($resultCampos['fMail'] == 0) && $resultCampos['fTel'] && $resultCampos['fCom'] )        
        {
            $fName = isset($_POST['form-name'])? $_POST['form-name'] : '';
            $fApe = isset($_POST['form-apellidos'])? $_POST['form-apellidos'] : '';
            $fMail = isset($_POST['form-mail'])? $_POST['form-mail'] : '';
            $fTel = isset($_POST['form-tel'])? $_POST['form-tel'] : '';
            $fEmpresa = isset($_POST['form-empresa'])? $_POST['form-empresa'] : '';
            $fWeb = isset($_POST['form-web'])? $_POST['form-web'] : '';
            $fCom = isset($_POST['form-comentario'])? $_POST['form-comentario'] : '';

            $from = $fMail;
            $to = "info@grupokalpana.com";
            $subject = "Solicitud de contacto";
            $body = $fCom."\r\n\r\nNombre: $fName $fApe\r\nTel: $fTel\r\nEmpresa: $fEmpresa\r\nMail: $fMail\r\nWeb: $fWeb";
         
            $host = "ssl://localhost";
            $port = "465";
            $username = "info@grupokalpana.com";
            $password = "info";
         
            $headers = array ('From' => $from,
            'To' => $to,
            'Subject' => $subject);
            $smtp = Mail::factory('smtp',
            array ('host' => $host,
                'port' => $port,
                'auth' => 'LOGIN',
                'debug' => false,
                'username' => $username,
                'password' => $password));
         
            $mail = $smtp->send($to, $headers, $body);
         
            if (PEAR::isError($mail)) {
                $resultCampos['enviado'] = $mail->getMessage();
            } else {
                $resultCampos['enviado'] = 'ok';
            }
        }
        return $resultCampos;
    }
?>
