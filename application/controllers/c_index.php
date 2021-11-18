<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller {

    function __construct(){
        parent::__construct();
          // Load Model M_Index pada fungsi construct

    }

    public function index()
    {
        $this->load->view('V_Index'); // Load View V_Index
    }

    function kirimEmail(){
        $nama       = $this->input->post('nama'); // Menangkap inputan nama dari form
        $email      = $this->input->post('email'); // Menangkap inputan email dari form
        $acara      = $this->input->post('acara'); // Menangkap inputan acara dari form
        $alamat     = $this->input->post('alamat'); // Menangkap inputan alamat dari form
        $file    = $this->input->post('file'); // Menangkap inputan tanggal dari form

        $this->sendEmail($nama,$email,$acara,$alamat,$file);  //Memanggil fungsi sendEmail dengan parameter nama,email,acara,alamat, dan tanggal
        redirect('C_Index'); // redirect ke fungsi index contrller C_Index
    }

    function sendEmail($nama,$email,$acara,$alamat,$file){
        $this->load->library('PHPMailer_load'); //Load Library PHPMailer


        $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail


        $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
        $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
        $mail->SMTPAuth = true; // Autentikasi SMTP
        $mail->Username = 'usernameKamu@gmail.com';
        $mail->Password = 'passwordKamu';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('noreply@kompikaleng.com', 'Undangan Acara'); // Sumber email
        $mail->addAddress($email,'Kompi Kaleng'); // Masukkan alamat email dari variabel $email
        $mail->Subject = "Undangan Acara '$acara'"; // Subjek Email
        $mail->msgHtml("
            <h3>Undangan Acara $acara</h3><hr>
                Kepada Yth. <br>
                $nama<br><br>

                Kami mengundang anda untuk menghadiri acara, dengan detail sebagai berikut: <br><br>
                Nama Acara : $acara<br>
                Alamat Venue : $alamat<br>
                File : $file<br><br>

                Anda dapat mengkonfirmasi kehadiran dengan membalas e-mail ini.<br>
                Terima Kasih
            "); // Isi email dengan format HTML


        if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    //echo "Message sent!";
                } // Kirim email dengan cek kondisi
    }
}