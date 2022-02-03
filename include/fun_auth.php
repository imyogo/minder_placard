<?php
function fun_auth(){
    
    if(isset($_SESSION['m_user'])){
        header('location:index.php');
        exit();
    }
    
}

function fun_no_auth($ru='index.php'){
    
    if(!isset($_SESSION['m_user'])){
        header('location:index.php?ru='.$ru);
        exit();
    }
    
}

/* 驗證是否可拖曳 */
function fun_editable($m_level, $m_id, $sm_id){
    
    if($m_level==2){
        return true;
    }
    
    if($m_id==$sm_id){
        return true;
    }
    
    return false;
    
}
?>