<?php
    /* Form submitted? */
    if(isset($_REQUEST["upload-send"])) {
        echo "<pre>";
        echo "This script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
        echo "Filename: " . $_FILES['upload-file']['name'] . "<br>";
        echo "Tmp location/name: " . $_FILES['upload-file']['tmp_name'] . "<br>";
        echo "Mime type: " . $_FILES['upload-file']['type'] . "<br>";
        echo "File size: " . $_FILES['upload-file']['size'] . " bytes (" . round($_FILES['upload-file']['size'] / 1048576, 2) . " MB) <br><br>";
        echo "</pre>";

        /* Define array for messages  */
        $messages = array();

        /*  File upload */
        if(is_uploaded_file($_FILES['upload-file']['tmp_name'])) {
            /* File info */
            $fileType = $_FILES["upload-file"]["type"];
            $fileSize = $_FILES["upload-file"]["size"];

            /* Config */
            $accFileTypes = array(
                "jpeg" => "image/jpeg",
                "gif" => "image/gif", 
                "png" => "image/png"
            );

            $maxFileSize = 1530000; //In bytes
            $dir = $_SERVER["DOCUMENT_ROOT"] . "/MITT/forelesninger/shell/files/";

            /* No directory with that name? */
            if(!file_exists($dir)) {
                if(!mkdir($dir, 0777, true)) {
                    die("Cannot create directory..." . $dir);
                }
            }

            /* Finding suffix */
            $suffix = array_search($fileType, $accFileTypes);

            /*  If filename exists */
            do {
                $filename = substr(md5(rand(1, 10000) . date("YmdHis")), 0, 5) . "." . $suffix;
            }
            while(file_exists($dir . $filename));

            /* Errors? */
            if(!in_array($fileType, $accFileTypes)) {
                $acc_types = implode(", ", array_keys($accFileTypes));
                $messages["error"][] = "Invalid file type: only <em>" . $acc_types . "</em> are accepted";
            }

            if($fileSize > $maxFileSize) {
                $messages["error"][] = "The file size (" . round($fileSize / 1048576, 2) . " MB) exceeds maximum file size";
            }

            /* If everything is well */
            if(empty($messages)) {
                /*  Moving uploaded file to */
                $uploadedFile = move_uploaded_file($_FILES["upload-file"]['tmp_name'], $dir . $filename);

                if(!$uploadedFile) {
                    $messages["error"][] = "The file could not be uploaded";
                }
                else {
                    $messages["success"][] = "The file was uploaded and can be found here <strong>" . $dir . $filename . "</strong>";
                }
            }
        }
        else {
            $messages["error"][] = "No file is selected.";
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>M9 - upload file</title>
</head>

<body>
<?php
    /* Output messages to user */
    if(isset($messages) && !empty($messages))
    {
        echo "<strong>Message" . (sizeof($messages, COUNT_RECURSIVE)-1 > 1 ? "s:<br>" : ":<br>") . "</strong>";
        foreach($messages as $msg_type => $type_messages)
        {
            if($msg_type == 'error')
                foreach($type_messages as $message) { echo '<span style="color:red";>- ' . $message . '</span><br>'; }
            elseif($msg_type == 'success')
                foreach($type_messages as $message) { echo '<span style="color:green";>- ' . $message . '</span><br>'; }
        }
    }
    else
    {
        echo "<strong>Please select file to upload</strong>";
    }
?>

    <form method="POST" action="" enctype="multipart/form-data">
        <p>
            <label for="upload-file">Select file</label>
            <input name="upload-file" type="file">
        </p>
        <p><button type="submit" name="upload-send">Upload file</button></p>
    </form>
</body>
</html>