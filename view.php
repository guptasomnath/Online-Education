<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moymath Online Academy</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons//site.webmanifest">

    <link href="css/output.css" rel="stylesheet">
</head>
<body>
    <?php
    
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if (!isset($_GET['id']) || empty($_GET['id'])) {
           echo "
            <div class = 'flex flex-col justify-center items-center h-screen w-full'>
             <img class = 'pt-2' width = '350px' src = 'images/undraw_warning_re_eoyh.svg' />
             <h1 class = 'text-2xl pt-8 font-semibold'>Content ID is required</h1>
            </div>
           ";
           return;
        }

        $content_req_ID = $_GET['id'];

        function encodeUri($text) {
            $text = str_replace(' ', '+', $text);
            $text = str_replace(',', '%2C', $text);
            $text = str_replace("'", "%27", $text);
            $text = str_replace('>', '%3E', $text);
            $text = str_replace('=', '%3D', $text);
            return $text;
        }

      $base_url = "https://docs.google.com/spreadsheets/d/1Ku-fibjpQH29R0zpihJiEqkcdlPv5o2R7501e2bEtvg/gviz/tq?tqx=out:csv&sheet=";
      $tableName = "CoursesVideos";
      if(substr($content_req_ID, 0, 1) === "W"){
        $tableName = "Worksheet";
      }
      $query = "SELECT A,B,C,D,E,F,G where A contains '" . $content_req_ID . "'";

      $final_url = $base_url.$tableName.'&tq='.(string)encodeUri($query);

      $csv = file_get_contents($final_url);
      $rows = array_map("str_getcsv", explode("\n", $csv));

      $headers = array_shift($rows);

      $data = array();
      foreach($rows as $row){
        $data[] = array_combine($headers, $row);
      }

      if(sizeof($data) === 0){
        echo "
            <div class = 'flex flex-col justify-center items-center h-screen w-full'>
             <img class = 'pt-2' width = '380px' src = 'images/undraw_page_not_found_re_e9o6.svg' />
             <h1 class = 'text-2xl pt-8 font-semibold'>Video id is not exist</h1>
            </div>
           ";
        return;
      }


      $ID = $data[0]['ID'];
      $Title = $data[0]['Title'];
      $Date = $data[0]['Date'];
      $Description = $data[0]['Description'];
      $iFreamUrl = $data[0]['Url'];

      

     echo "
        <section class='w-full h-full flex flex-col items-center'>
            <div class='w-[60%] flex flex-col py-5 sm:w-[90%]'>
            <h1 class='text-3xl font-semibold text-gray-500 pb-2'>$Title</h1>
            <p class='text-sm'>$Date</p>
            </div>

            <div class='w-[60%] bg-gray-400 aspect-video sm:w-[90%]'>
                <iframe style='height:100%; width:100%;' src='$iFreamUrl' title='description'></iframe>
            </div>

            <div class='w-[60%] flex flex-col py-5 sm:w-[90%]'>

                <h2 class='font-semibold text-lg pb-1'>Description</h2>
                <p class='text-base'>$Description</p>

            </div>
        </section>
     ";
    
    ?>
</body>
</html>