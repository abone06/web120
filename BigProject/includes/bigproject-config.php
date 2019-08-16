<?php

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Big Project site";
        $logo = "fa-tasks";
        $PageID = 'Big Project - Form';
    break;
    
    case 'google.php':
        $title = "Google Feature";
        $logo = 'fa-map-maker-smile';
        $PageID = 'Google';
    break;
        
    case 'galleries.php':
        $title = "Bone's WEB120 Gallerie Research";
        $logo = 'fa-images';
        $PageID = 'Gallerie Research';
    break;
        
    case 'sitevsapp.php':
        $title = "Responsive Website VS Mobile App";
        $logo = "fa-tasks";
        $PageID = 'Big Project - Site vs App';
    break;
    
    case 'flexbox.php':
        $title = "Flex Box";
        $logo = 'fa-map-maker-smile';
        $PageID = 'Big Project - Flexbox';
    break;
        
    case 'shopping.php':
        $title = "Shopping Carts";
        $logo = 'fa-images';
        $PageID = 'Big Project - Shopping Carts';
    break;
        
    case 'calendar.php':
        $title = "Responsive Calendar";
        $logo = "fa-tasks";
        $PageID = 'Calendar';
    break;
    
    case 'map.php':
        $title = "Responsive Map";
        $logo = 'fa-map-maker-smile';
        $PageID = 'Map';
    break;
        
    case 'youtube.php':
        $title = "Responsive Media";
        $logo = 'fa-images';
        $PageID = 'Media';
    break;
        
    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-images';
        $PageID = 'Webcam';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Other';

}

$nav1['../index.php'] = "Web120 Portal";
$nav1['index.php'] = "Home";
$nav1['sitevsapp.php'] = "Site Vs App";
$nav1['flexbox.php'] = "Flex box";
$nav1['galleries.php'] = "Galleries";
$nav1['shopping.php'] = "Shopping Carts";
$nav1['google.php'] = "Google";
$nav1['calendar.php'] = "Calendar";
$nav1['map.php'] = "Map";
$nav1['youtube.php'] = "Youtube";
$nav1['webcam.php'] = "Web Cam";

/*$nav2['calendar.php'] = "Calendar";
$nav2['map.php'] = "Map";
$nav2['youtube.php'] = "Youtube";
*/
/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Bone</a></li>
*/


function makeLinks($nav1)
{
    
    $myReturn = '';
    
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
            
        }else{
            $myReturn .= '<li><a href="'.$url.'">'.$text.'</a></li>';
        }
    }
    
    return $myReturn;
    
    /*
    
    
    
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= '<li><a class="selected" href="'.$url.'">'.$text.'</a></li>';
            
        }else{
            if($url == "google.php"){
                $myReturn .= '<li><a href="'.$url.'">'.$text.'</a></li>';
                $myReturn .= "<ul>";
                
                //$myReturn .= '<ul><li><a href=\"calendar.php">Calendar</a></li><li><a href=\"map.php">Map</a></li><li><a href=\"youtube.php">Youtube</a></li></ul>';
                foreach($nav2 as $url2 => $text2)
                {
                    $myReturn .= '<li><a href="'.$url2.'">'.$text2.'</a></li>';
                }
                $myReturn .= "</ul>";
            }
            else{
                $myReturn .= '<li><a href="'.$url.'">'.$text.'</a></li>';
               
            }
            
            
        }
    
    
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
            
        }else{
            
            if($url == "google.php"){
                $myReturn .= "<li><a href=\"$url\">$text</a></li>";
                $myReturn .= "<ul>";
                foreach($nav2 as $url2 => $text2)
                {
                    $myReturn .= "<li><a href=\"$url2\">$text2</a></li>";
                }
                $myReturn .= "</ul>";
            }else{
                $myReturn .= "<li><a href=\"$url\">$text</a></li>";
            }
        }
    }
    
    return $myReturn;
    */
}



?>
