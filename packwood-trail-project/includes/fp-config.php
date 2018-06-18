<?php 
/* ptp-config.php
/  
/  Packwood Trail Project
/
/  Derek S Wilson
/ 
/  Spring 2018
/
*/

// echo basename($_SERVER['PHP_SELF']);

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// echo THIS_PAGE;
// die;

switch (THIS_PAGE) {
    case 'index.php': 
        $title = "Packwood Trail Project";
        $logo = 'ptpLogoTransSmall.png';
        $pageID = 'Packwood Trail Project';
    break;
        
//    case 'designs.php': 
//        $title = 'Trail Designs';
//        $logo = 'ptpLogoTransSmall.png';
//        $pageID = 'Trail Designs';
//    break;
        
    case 'partners.php': 
        $title = 'Partners';
        $logo = 'ptpLogoTransSmall.png';
        $pageID = 'Partners and Supporters';
    break;
        
    case 'survey.php': 
        $title = 'Interest Survey';
        $logo = 'ptpLogoTransSmall.png';
        $pageID = 'Interest Survey';
    break;
        
    case 'blog.php': 
        $title = 'Blog';
        $logo = 'ptpLogoTransSmall.png';
        $pageID = 'Blog';
    break;
        
    case 'documents.php': 
        $title = 'Documents';
        $logo = 'ptpLogoTransSmall.png';
        $pageID = 'Documents';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'ptpLogoTransSmall.png';
        $pageID = '';
}

// Create associative array with navigation list items
// Associative array indices are the link href from the html 

$links['index.php']         = 'Project';
//$links['designs.php']       = 'Designs';
$links['partners.php']      = 'Partners';
$links['survey.php']        = 'Survey';
$links['blog.php']          = 'Blog';
$links['documents.php']     = 'Docs';

// create nav function to highlight

function makeNav ($nav) {
    $navItem = '';
    foreach ($nav as $href => $link_title) {
        if(THIS_PAGE == $href)
        { //add class selected
           $navItem .= '<li><a href="' . $href . '" class="selected">' . $link_title . '</a></li>';
        } else { //no class selected
           $navItem .= '<li><a href="' . $href . '">' . $link_title . '</a></li>'; 
        } //end else
    } //end foreach
    return $navItem;
} // end makeNav

?>
