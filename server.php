<?php 
$db= new PDO('mysql:host=localhost;dbname=testdb;','root','');

$islem = $_GET['islem'] ?? null;
if($islem=='addgroup'){
    $name= $_POST['groupname'];
    $q = $db->query("INSERT INTO `groups` SET group_name = '$name'");

    if($q){
        $status = 'success';
        $title = 'İşlem Başarılı';
        $msg = 'İşlem Başarıyla tamamlandı.';
        echo json_encode(['status'=>$status,'title' => $title,'msg'=>$msg, 'data'=>[
            'id' => $db->lastInsertId(),
            'name' => $name
        ]]);
        exit();
    }else{
        $status = 'err';
        $title = 'Ops! Dikkat';
        $msg = 'Beklenmedik bir hata meydana geldi. lütfen sayfanızı yenileyerek tekrar deneyin.';
        echo json_encode(['status' =>$status,'title'=>$title,'msg'=>$msg]);
        exit();
    }
}


?>