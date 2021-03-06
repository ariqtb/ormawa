<?php
require APPPATH . '/third_party/gdrive/';
require APPPATH . '/third_party/gdrive/src/Google/Client.php';

class upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index()
    {
        // setting config untuk layanan akses ke google drive
        $client = new Google_Client();
        $client->setAuthConfig(require APPPATH . '/third_party/gdrive/oauth-credentials.json');
        $client->addScope("https://www.googleapis.com/auth/drive");
        $service = new Google_Service_Drive($client);

        // mengecek keberadaan token session
        if (empty($_SESSION['upload_token'])) {
            // jika token belum ada, maka lakukan login via oauth
            $authUrl = $client->createAuthUrl();
            header("Location:" . $authUrl);
        } else {
            // jika token sudah ada, maka munculkan form upload file
?>
            <h1>Upload to GDrive</h1>
            <form method="post" enctype="multipart/form-data" action="upload.php">
                Pilih File:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
            </form>

<?php
            // jika form upload disubmit
            if (isset($_POST['submit'])) {
                // menggunakan token untuk mengakses google drive
                $client->setAccessToken($_SESSION['upload_token']);
                // membaca token respon dari google drive
                $client->getAccessToken();

                // instansiasi obyek file yg akan diupload ke Google Drive
                $file = new Google_Service_Drive_DriveFile();
                // set nama file di Google Drive disesuaikan dg nama file aslinya
                $file->setName($_FILES["fileToUpload"]["name"]);
                // proses upload file ke Google Drive dg multipart
                $result = $service->files->create($file, array(
                    'data' => file_get_contents($_FILES["fileToUpload"]["tmp_name"]),
                    'mimeType' => 'application/octet-stream',
                    'uploadType' => 'multipart'
                ));

                // menampilkan nama file yang sudah diupload ke google drive
                echo $result->name . "<br>";
            }
        }

        // proses membaca token pasca login
        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            // simpan token ke session
            $_SESSION['upload_token'] = $token;
        }
        redirect('proposal/index');
    }
}

?>

