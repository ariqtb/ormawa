<h1>Upload to GDrive</h1>
    <form method="post" enctype="multipart/form-data" action="<?= base_url().'api/gdrive'?>">
        Pilih File:
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload File" name="submit">
    </form>