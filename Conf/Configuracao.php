<?php

class Configuracao {

    public function dataToBR($dataAmericana) {
        //2015-01-21 para 21/01/2015
        $d = explode('-', $dataAmericana);
        $dOk = $d['2'] . '/' . $d['1'] . '/' . $d['0'];
        return $dOk;
    }

    public function dataToUSA($dataBrasileira) {
        $d = explode('/', $dataBrasileira);
        $dOk = $d['2'] . '-' . $d['1'] . '-' . $d['0'];
        return $dOk;
    }

    public function dataTimeToBR($dataTimeAmericana) {
        //2015-01-21 para 21/01/2015
        $d = explode(' ', $dataTimeAmericana);
        $dOk = $this->dataToBR($d['0']) . ' ' . $d['1'];
        return $dOk;
    }

    public function dataTimeToUSA($dataTimeBrasileira) {
        //2015-01-21 para 21/01/2015
        $d = explode(' ', $dataTimeBrasileira);
        $dOk = $this->dataToBR($d['0']) . ' ' . $d['1'];
        return $dOk;
    }
    
    function sendMail($de,$para,$mensagem,$assunto)
{
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try {
      $mail->SMTPAuth   = true;
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPSecure = "tls"; #remova se nao usar gmail
     $mail->Port       = 587;                  #remova se nao usar gmail
      $mail->Username   = 'fie2377@gmail.com';
      $mail->Password   = 'novisk23';
      $mail->AddAddress($para);
     $mail->AddReplyTo($de);
     $mail->SetFrom($de);
      $mail->Subject = $assunto;
      $mail->MsgHTML($mensagem);
      $mail->Send();    
      $envio = true;
    } catch (phpmailerException $e) {
      $envio = false;
    } catch (Exception $e) {
      $envio = false;
    }
    return $envio;
}

}
