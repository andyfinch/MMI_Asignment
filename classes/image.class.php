<?php

class Image
{
    private $phpFileUploadErrors;

    protected $Conn;
    //protected $response;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
        $this->phpFileUploadErrors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the max file size of ' . ini_get('upload_max_filesize') . 'B',
            2 => 'The uploaded file exceeds the max file size of ' . ini_get('upload_max_filesize') . 'B',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'There was an issue with the file upload',
            7 => 'There was an issue with the file upload',
            8 => 'There was an issue with the file upload',
        );
    }



    public function uploadImage($submittedFiles)
    {
        $target_dir = "uploads/";

        $response_object = array(
            "success" => true,
            "errorCode" => 0,
            "errorMessage" => $this->phpFileUploadErrors[0],
            "filesAdded" => array()
        );

        if (isset($submittedFiles['fileToUpload'])) {
            $myFile = $submittedFiles['fileToUpload'];
            $fileCount = count($myFile["name"]);

            for ($i = 0; $i < $fileCount; $i++) {

                if ($myFile["error"][$i] != 0)
                {

                    $response_object['success'] = false;
                    $response_object['errorCode'] = $myFile["error"][$i];
                    $response_object['errorMessage'] = $this->phpFileUploadErrors[$myFile["error"][$i]];

                    return $response_object;
                }

                $file_name = $myFile["name"][$i];
                $file_tmp = $myFile["tmp_name"][$i];
                $uniqueFileName = uniqid() . $file_name;

                $success = move_uploaded_file($file_tmp, $target_dir . $uniqueFileName);

                if ($success) {

                    $response_object['success'] = true;
                    $response_object['errorCode'] = 0;
                    $response_object['errorMessage'] = $this->phpFileUploadErrors[0];
                    array_push($response_object['filesAdded'], $uniqueFileName);
                    

                }
                else{
                    $response_object['success'] = false;
                    $response_object['errorCode'] = 6;
                    $response_object['errorMessage'] = $this->phpFileUploadErrors[6];

                    return $response_object;
                }

            }
        }

        return $response_object;
    }


}

?>
