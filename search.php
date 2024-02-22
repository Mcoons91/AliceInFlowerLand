<!-- Search bar functionality-->

$search = $_POST['findMe'];
//$search = "example";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM

//IF WORD FOUND IN HOME PAGE
if (stripos($home, $search) !== false) {
    echo '<a href="'.$homePageName.'">'.$homePageName.'</a>';
}

