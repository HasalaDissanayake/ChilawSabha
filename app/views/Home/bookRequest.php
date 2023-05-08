<?php
$errors = $data['errors'] ?? false;
?>


<div class="head-area">
    <h1>Request a Book</h1>
    <hr>
</div>
<div class="formContainer">

  <?php if ($data['Add'] ?? false) {
    if (!$data['Add']['success']) {
      echo "Failed To Add Request " . $data['Add']['errmsg'];
    } else {
      echo "Book Request Added Successfully";
    }
  }?>

  <form class="fullForm" method="post">

      <?php Errors::validation_errors($errors, [
          'email' => 'User Email',
          'title' => "Book Title",
          'author' => 'Author',
          'isbn' => 'ISBN No',
          'reason' => 'Request Reason'
      ]);?>


      <?php Text::email('Enter Your Email','email','email',placeholder:'Enter Email',value:$_SESSION['email'] ?? '',required:true);?>
      <?php Text::text('ISBN No','isbn','isbn',placeholder:'Enter ISBN No',minlength:10,maxlength:13,pattern:"(\d{10}|\d{13})");?>
      <?php Text::text('Book Title','title','title',placeholder:'Enter Book Title',maxlength:255);?>
      <?php Text::text('Book Author','author','author',placeholder:'Enter Book Author',maxlength:100);?>
      <?php Text::textarea('Reason for requesting', 'reason', 'reason',placeholder:'Enter Reason', required:true); ?>
      <?php Other::submit('Add','add',value:'Add Request');?>

  </form>
</div>

 