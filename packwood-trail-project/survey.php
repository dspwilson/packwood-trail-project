
<!-- Packwood Trail Project Template Page -->
<!-- Derek S Wilson -->
<!-- June 2018      -->
<!-- Description: Template page to be         -->
<!-- cut into includes for header and footer  -->
<!-- on every page on site based on this template -->


<!-- Start header.php include -->
<?php include 'includes/header.php'; ?>
<!-- End header.php include here -->
    
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$pageID?></h2>

  <!-- add mulitple .php contact pages for questions we ask most web clients -->
 <?php include "includes/interest-survey.php"; ?>

</section>   
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Interest Survey</h3>
    
 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    
 <img src="images/packwood-sign.png" class="desktop" alt="Packwood Town Sign" />
</aside>
    
<!-- END RIGHT COL -->

<!-- State footer.php include -->
<?php include "includes/footer.php"; ?>
<!-- End footer.php include here -->
    
    
</body>
</html>

