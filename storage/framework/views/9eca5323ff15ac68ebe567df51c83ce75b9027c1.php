
<?php $__env->startComponent('mail::message'); ?>
<style>
    .msg{
        color: #111;
        font-size: 14px;
        padding: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .center {
            margin: auto;
            width: 100%;
            text-align: center;
            text-align: center;
            color: gray;
        }
    hr{
        border-top: .1em solid whitesmoke;
    }
</style>

<div class="center">
        <strong style="font-size: 22px; text-transform: uppercase;"><?php echo e($content['notif']); ?></strong>
    <br>
    <br>
</div>

<div class="msg">
    <?php if($content['msg'] == 'approved_resident'): ?>
       Congratulations, your account has been approved. You can now log in using your account’s registered email and password. You may also start requesting and track your requested service once you have submitted a request.
    <?php endif; ?>

    <?php if($content['msg'] == 'declined_resident'): ?>
       After carefully verifying the information you have submitted, your account application has been declined. Please check the information you have submitted.
      
        Reminders when submitting your information:
        - Make sure your first name, middle name (if applicable), and your last name is correct and the same as the name on the Valid ID image you have submitted.
        
        - Ensure that the Valid ID image is not blurry, with the information and picture visible and readable.
        
        - Acceptable Valid IDs are as follows:
           * Passport
           * Driver’s License
           * PhilSys ID
           * UMID
           * Voter’s ID
           * PRC ID
           * Postal ID (Digital)
           * SSS Card
           * OWWA E-Card
           * Pag-Ibig ID
           * Philhealth ID
           * TIN ID
           * School ID (for students)
            
          Please make sure to submit an image file of your Valid ID
          format(.jpg or .png).
         
    <?php endif; ?>

    <?php if($content['msg'] == 'deactivated_resident'): ?>
        We’ve checked your account and it seems that there are suspicious activities on it. With this, we have deactivated your account to prevent any illegal activities from happening.
        
        Possible reasons for account deactivation:
            
        * Fake identity
        * Spamming activity such as sending inappropriate messages 
          or attaching images irrelevant or sensitive ones.
        * Vulgar words usage such as foul and offensive words
        * Too many invalid requests
        * Other specific reasons

        If you want to file a dispute to have your 
        account reactivated, feel free to reach us
        through our email: ebarangayassistance@gmail.com
    <?php endif; ?>

    <?php if($content['msg'] == 'request_paid'): ?>
        This is to notify and confirm that your payment has been received. Please check your dashboard as well for any updates on the claiming date of your document.
    
    <?php elseif($content['msg'] == 'request_approved'): ?>
    Request Tracking Number: <?php echo e($content['request_number']); ?>

        Document: <?php echo e($content['document']); ?>

        Tentative Claiming Date: <?php echo e($content['claiming_date']); ?>

    <?php elseif($content['msg'] == 'request_completed'): ?>
        Congratulations! Your document request has been completed. For any feedback or concerns, feel free to message us on the E-Barangay portal or you can also email us if you need any assistance: ebarangayassistance@gmail.com
    <?php elseif($content['msg'] == 'request_declined'): ?>
    Possible reasons on why payment has been declined

        1. The screenshot or proof of payment you have submitted
        does not match your information.

        2. The screenshot or proof of payment you submitted is 
        blurry or not readable. Please make sure that screenshot or
        image is clear and all information are visible. 

        3. You have paid an incorrect/insufficient amount. Please 
        make sure to pay the correct price of document indicated.

    <?php elseif($content['msg'] == 'send_msg'): ?>
    Name: <?php echo e($content['name']); ?>

        Email: <?php echo e($content['email']); ?>


        <?php echo e($content['body']); ?>

    <?php endif; ?>
    
    

</div>


<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/emails/notification.blade.php ENDPATH**/ ?>