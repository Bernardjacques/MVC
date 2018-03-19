<?php
if($page == 'home'){
    include('view/header.php');
    include('view/main.php');
    include('view/footer.php');
}
elseif($page == 'contact'){
    include('view/header1.php');
    include('view/contact.php');
    include('view/footer.php');
}

elseif($page == 'presentation'){
    include('view/header1.php');
    include('view/presentation.php');
    include('view/footer.php');
}
?>