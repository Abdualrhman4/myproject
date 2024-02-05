<?php

include './inc/db.php';
include './inc/form.php';
include './inc/Select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php';?>
<?php include_once './parts/footer.php';?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="col-md-5 p-lg-5 mx-auto my-5" >
      <h1 class="display-4 fw-normal">اربح مع عبدالرحمن</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخه مجانيه من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
</div>
</div>


<center>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على الفيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر اسئله واجوبه حره للجميع</li>
  <li class="list-group-item">خلال فتره الساعه سيتم فتح صفحه التسجيل هنا جيث سنقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهايه البث سيتم اختيار اسم واحد من قاعده البيانات بشكل عشوائي</li>
  <li class="list-group-item"> الرابح سيحصل على نسخه مجانيه من برنامج كامتازيا</li>
</ul>
</center>

<br><br>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="col-md-5 p-lg-5 mx-auto my-5" >

<form action="<?php $_SERVER['PHP_SELF']  ?>"  method="POST">
  <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text"  name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text"  name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
 

 <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text"  name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
 
 
  
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>


</div>

















</div

-->
<button id="winner" type="button">اخيار الرابح</button>
<div id="cards" class="row mb-5 pd-5">

<?php foreach($users as $user): ?>
 <h1><?php echo htmlspecialchars($user['firstName']). ' ' . htmlspecialchars($user['lastName']) . '<br> ' . htmlspecialchars($user['email']);?></h1>
<?php endforeach;  ?>
</div>