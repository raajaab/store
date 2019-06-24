<?php

$new_image_name = "newimage_".mt_rand().".jpg";
if(isset($_FILES['file']['tmp_name'])){
// upload file
move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$new_image_name);
// في حال وجود ملف مرسل .. سيتم طباعة اسم الصورة
echo $new_image_name ;
} else {
// في حال عدم وجود ملف مرسل سيتم طباعة هذه العبارة no file
echo 'no file';
}