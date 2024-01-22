<?php 
    if(isset($_POST['id'])||isset($_GET['id'])){
        if(isset($_POST['btn-search'])){
            $idGroup = $_POST['id'];
        }else{
            $idGroup = $_GET['id'];
        }
    }else{
        reUrlClient("group");
    }
    $group = GroupModels::GroupFind("id = $idGroup");
    $groupId = $group['id'];
    $allQuestion = QuestionModel::QuestionAll(['*'],"group_id = $groupId");
    require_once $views . "Questions/question.php";
?>