<?php
    include_once( "function.php");

    $createFolder = 'create/'.$_POST['session'];
    
    mkdir($createFolder, 0777);
      
    $files_to_zip = array();    
    
    $pattern = '/{{|}}/';
    $subject = $_POST['code'];
    $limit = -1;
    $flags = PREG_SPLIT_NO_EMPTY;
    $result = preg_split($pattern, $subject, $limit, $flags);

    $y = count($result);

    for ($i=0; $i<$y; $i+=2) {

        $ourFileName = $createFolder."/".$result[$i].".php";

        array_push($files_to_zip, $ourFileName);

        $ourFileHandle = fopen($ourFileName, 'w');
        
        $arrayFind = array(
            'img/',
            'css/',
            'js/'
        );
        $arrayReplace = array(
            '<?php echo get_template_directory_uri(); ?>/img/',
            '<?php echo get_template_directory_uri(); ?>/css/',
            '<?php echo get_template_directory_uri(); ?>/js/'
        );

        $fileReplace = str_replace( $arrayFind, $arrayReplace, $result[$i+1]);

        if ($result[$i] == 'index') {
            $fileReplace = '<?php get_header(); ?>'.$fileReplace.'<?php get_footer(); ?>'; 
        }

        fwrite($ourFileHandle, $fileReplace);

        fclose($ourFileHandle);
    
    }

    $result = create_zip($files_to_zip,$createFolder.'.zip');

    echo '<h4>Your HTML code is processed.</h4>
            <p>Click button to download files</p>
            <a class="btn btn-success" href="'.$createFolder.'.zip">Download</a>';