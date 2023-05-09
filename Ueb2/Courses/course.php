<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <section class="teachers">
    <h1 class="heading">Expert Tutors</h1>
    <div class="box-container">
        <?php
        $select_tutors=$conn->prepare("SELECT*FROM 'tutors'");
        $select_tutors->execute();
        if($select_tutors->rowCount()>0){
while($fetch_tutor=$select_tutors->fetch(PDO::FETCH_ASSOC)){
    $tutor_id=$fetch_tutor['id'];

    $count_student=$conn->prepare("SELECT*FROM 'student' WHERE tutor_id=?");
    $count_student->execute([$tutor_id]);
    $total_student=$count_student->rowCount();

    $count_Assignments=$conn->prepare("SELECT * FROM 'Assignments' $count_Assignments' WHERE tutor_id=?");
    $count_Assignments->execute([$tutor_id]);
    $total_Assignments=$count_Assignments->rowCount();
}
        
?>
<div class="box">
    <div class="tutor">
        <img src="uploaded_files/<?=$fetch_tutor['image'];?>" alt="">
        <div>
            <h3>
                <?=$fetch_tutor['name'];?></h3>
                <span><?=$fetch_tutor['profession'];?></span>
            </h3>
        </div>

    </div>
    <p>Total students:</p><span><?=$total_student;?></span>
    <p>Total Assignments:</p><span><?=$total_Assignments;?></span>
    <a href="tutor_profile.php?get_id=<? $fetch_tutor['email'];?> " class="inline-btn">View Profile</a>
</div>
<?php
        }else{
            echo '';
        }
        ?><p class="empty">no tutors was not found!</p>
    </div>
 </section>   
</body>
</html>
