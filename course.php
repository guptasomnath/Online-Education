<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moymath Academy Courses</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons//site.webmanifest">

    <link href="css/output.css" rel="stylesheet">
</head>
<body>

        <?php  
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                $url = "https://";   
            else  
                $url = "http://";   
            // Append the host(domain name, ip) to the URL.   
            $url.= $_SERVER['HTTP_HOST'];   
            
            // Append the requested resource location to the URL   
            $url.= $_SERVER['REQUEST_URI'];    
            
            $current_page_url =  $url;  
        ?>   
    <section class="w-full h-screen pt-20">
        <h1 class="w-full font-bold text-4xl text-center text-slate-700">Courses</h1>
        <!-- Catagorys -->
        <div class="w-full flex justify-between shadow-md pt-10 pb-5 px-14 sm:px-4">

        <div class="w-full sm:w-auto">
            <svg id = "searchIcon" class="text-gray-400 cursor-pointer sm:mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314Z"/></svg>
            <svg id = "courseCloseIcon" class="hidden cursor-pointer sm:mr-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m7 7l10 10M7 17L17 7"/></svg>
        </div>

            <ul id = "courseCatList" class="flex gap-8 font-semibold text-[#2c2c2d] underline-offset-8 sm:overflow-x-scroll sm:w-full scrollbar-hide">
                <?php 
                    $base_url = "http://localhost:3000";
                    $requestMethod = $_SERVER['REQUEST_METHOD'];
                    $req_tab_opt_name = "Coding";

                    if(isset($_GET['opt']) || !empty($_GET['opt'])){
                        $req_tab_opt_name = $_GET['opt'];
                    }

                    $tabList = array('Coding', 'Math', 'Science', 'Physics', 'Chemistry', 'Biology');
                    foreach($tabList as $item){
                        if($req_tab_opt_name === $item){
                            echo "
                                <a href = '$base_url/course.php?opt=$item'><li class='cursor-pointer underline decoration-rose-600 text-[#9e9ea0]'>$item</li></a>
                            ";
                        }else{
                            echo "

                                <a href = '$base_url/course.php?opt=$item'><li class='cursor-pointer'>$item</li></a>
                            ";
                        }
                    }
                ?>
            </ul>

           <!-- Emty Div For Space -->
            <div class="w-full text-right sm:hidden">

            </div>

        </div>

        <!-- Search bar -->
        <?php 
         
         echo "
          
            <form action='$current_page_url' method='post'>
                <div id = 'searchBox' class='hidden items-center justify-center w-full gap-3 py-2 mt-7'>
                    <div class='w-[30%] shadow-sm border px-3 py-2 sm:w-[80%] flex items-center relative'>
                        <input id='searchInput' class='w-full outline-none pr-8' placeholder='Search..' name = 'search_input'/>
                        <button name='search_btn' type='submit' id = 'searchBtn' class='cursor-pointer h-full w-10 bg-[#C7C5BF] absolute right-0 flex items-center justify-center'>  
                        <svg class='text-[#1A6573]' xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 1024 1024'><path fill='currentColor' d='m795.904 750.72l124.992 124.928a32 32 0 0 1-45.248 45.248L750.656 795.904a416 416 0 1 1 45.248-45.248zM480 832a352 352 0 1 0 0-704a352 352 0 0 0 0 704z'/></svg>
                        </button>    
                    </div>
                </div>
            </form>
         
         ";
        
        ?>

           <!-- filter div -->
        <div class="sm:block w-full flex justify-center px-7 pt-5">
            <!-- <select id = "courseType" class="outline-none px-3 py-2">
                <option>Videos</option>
                <option>Worksheet</option>
            </select> -->
          <div class='w-[955px] sm:w-full'>
            <?php 
              $requestMethod = $_SERVER['REQUEST_METHOD'];
              
              $tableNames = ['Videos', 'Worksheet'];
              $current_table_name = $tableNames[0];

              $currentUrl = $current_page_url;//$base_url . '/course.php';

              if(strpos($currentUrl, '?opt=')){
                $currentUrl = $currentUrl . '&table=';
              }else{
                if(strpos($currentUrl, '?table=')){

                    $pos = strpos($currentUrl, '?table=');

                    if ($pos !== false) {
                        $currentUrl = substr($currentUrl, 0, $pos);
                        $currentUrl .= '?table=';
                     }
                    
                }else{
                    $currentUrl = $currentUrl . '?table=';
                }
              }

              if(isset($_GET['table'])){
                 $current_table_name = $_GET['table'];
                 // Find the position of '&table=' in the current URL
                 $pos = strpos($currentUrl, '&table=');

                 // Remove everything after '&table=' in the current URL
                 if ($pos !== false) {
                    $currentUrl = substr($currentUrl, 0, $pos);
                    // Append '&table=' to the current URL
                    $currentUrl .= '&table=';
                 }

              }

              foreach($tableNames as $item){

                 if($item === $current_table_name){
                    echo "

                    <a href='$currentUrl$item'><button class='border px-4 py-1 text-sm text-white rounded-full bg-[#638D9C]'>$item</button></a>
                    
                    ";
                 }else{
                    echo "
                       
                      <a href='$currentUrl$item'><button class='border px-4 py-1 text-sm rounded-full'>$item</button></a>
                    
                    ";
                 }

              }


            ?>
          </div>
        </div>

        <!-- Loading Progress -->
        <div id = 'loadingBar' role='status' class='w-full hidden justify-center mt-14'>
            <svg aria-hidden='true' class='w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600' viewBox='0 0 100 101' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z' fill='currentColor'/>
                <path d='M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z' fill='currentFill'/>
            </svg>
            <span class='sr-only'>Loading...</span>
        </div>

        <!-- Course List -->
        <p id = "notFoundLbl" style="display: none" class="w-full text-center text-2xl font-semibold text-slate-400 pt-14">No data found!!</p>

       <!-- Video List Design -->
       <div class="w-full flex justify-center">
        <ul id = "listview" style="width: 1000px" class="h-full flex justify-center gap-8 flex-wrap mt-7">
           <?php
                $requestMethod = $_SERVER['REQUEST_METHOD'];

                echo isset($_POST['opt']);

                function encodeUri($text) {
                    $text = str_replace(' ', '+', $text);
                    $text = str_replace(',', '%2C', $text);
                    $text = str_replace("'", "%27", $text);
                    $text = str_replace('>', '%3E', $text);
                    return $text;
                }

                $db_base_url = "https://docs.google.com/spreadsheets/d/1Ku-fibjpQH29R0zpihJiEqkcdlPv5o2R7501e2bEtvg/gviz/tq?tqx=out:csv&sheet=";
                $db_table = "Videos";
                $db_quary = "SELECT A,B,C,D,E,F,G where E contains '" . $req_tab_opt_name . "'";

                if(isset($_GET['table'])){
                    $db_table = $_GET['table'];
                }

                //if search_input exist in post request then i can know that user hit search btn
                if(isset($_POST['search_btn'])){
                    $db_quary .= " and C contains '" . $_POST['search_input'] . "'";
                }

                $final_url = $db_base_url.$db_table.'&tq='.(string)encodeUri($db_quary);

                $csv = file_get_contents($final_url);
                $rows = array_map("str_getcsv", explode("\n", $csv));

                $headers = array_shift($rows);
                $data_list = array();
                foreach($rows as $row){
                    $data_list[] = array_combine($headers, $row);
                }

                if(empty($data_list)){
                    echo "
                      
                      <p style='display: block' class='w-full text-center text-2xl font-semibold text-slate-400 pt-14'>No data found!!</p>
                    
                    ";
                    return;
                }

                for ($i = 0; $i < sizeof($data_list); $i++) {
                    $ID = $data_list[$i]["ID"];
                    $Image = $data_list[$i]["Image"];
                    $Date = $data_list[$i]["Date"];
                    $Catagory = $data_list[$i]["Catagory"];
                    $Title = substr($data_list[$i]["Title"], 0, 49);

                    echo "
                    
                            <a href = '$base_url/view.php?id=$ID' target='_blank'>
                            <li class='cursor-pointer w-[300px] h-[333px] border shadow flex flex-col'>
                
                            <img class='w-full h-[160px] bg-gray-300' src = '$Image' />
                
                            <div class='w-full px-5 py-5 flex flex-col justify-between flex-grow'>
                
                                <p class='text-sm'>$Catagory</p>
                                <h2 class='font-semibold text-lg'>$Title..</h2>

                            <div class='flex items-center gap-2'>
                                <svg class='text-red-500 cursor-pointer' xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24'><path fill='currentColor' d='M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm4-7h-3V2h-2v2H8V2H6v2H3v18h18V4zm-2 16H5V9h14v11z'/></svg>
                                <span class='text-sm font-medium text-slate-700'>$Date</span>
                            </div>
                            </div>
                            
                        </li>
                    </a>
                    
                    
                    ";
                    
                }
                
               ?>
        </ul>
    </div>

    </section>
  <script src="js/course.js"></script>
</body>
</html>