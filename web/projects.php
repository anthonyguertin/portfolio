<?php

include './lib/templates/header.php'; 
?>
<div id="page-projects">
  <p id="projects-header">A lot of the work that I do is in C# using Windows Forms. <br />Visual Studio is my go to IDE and is where I spend a good <br />chunk of my development time.
   I am also becoming very <br />skilled in web technologies. The HTML-CSS-JS-PHP-JQ <br />stack is becoming much more familiar every day.  I intend <br /> to become a master of web 
   technologies in the next few <br />years. There is nothing I enjoy more than learning new tech-<br />nologies. If it has to do with making the world a better place, <br /> I will have some
   thing to do with it.   
  </p>
  <div id="projects-content">
     <div id="quickbooksReadMoreReadLess2">
      <ul class="item">
          <li>PlanSwift QuickBooks Integration </li>
      </ul>
      <ul class="item">
			<iframe width="560" height="315" src="//www.youtube.com/embed/OsElb3Oras4" frameborder="0" allowfullscreen></iframe>
			<br />
			<i>Created by Anthony Guertin.</i>
      </ul>
   </div>
   
     <div id="voiceReadMoreReadLess2">
      <ul class="item">
          <li>PlanSwift Voice Recognition. Allows Digitizing with just your voice! </li>
      </ul>
      <ul class="item">
			<iframe width="560" height="315" src="//www.youtube.com/embed/tvTaGUDnEqY" frameborder="0" allowfullscreen></iframe>
			<br />
			<i>Created by Anthony Guertin.</i>
      </ul>
   </div>
   <div id="dbsReadMoreReadLess2">
      <ul class="item">
          <li>PlanSwift with Microsoft SQL Server as a backbone for all takeoff data! Run your company data through this utility. </li>
      </ul>
      <ul class="item">
			<iframe width="560" height="315" src="//www.youtube.com/embed/NAXWldoEGuU" frameborder="0" allowfullscreen></iframe>
			<br />
			<i>Created by Anthony Guertin.</i>
      </ul>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.readmore-readless.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function () {
        // // Initialize the plugin with no custom options
        $("#readMoreReadLess1").readMoreReadLess();

        // Use the plugin with items in summary set to 1
        $("#quickbooksReadMoreReadLess2").readMoreReadLess({
            itemInSummary: 1
        });
        $("#voiceReadMoreReadLess2").readMoreReadLess({
            itemInSummary: 1
        });
        $("#dbsReadMoreReadLess2").readMoreReadLess({
            itemInSummary: 1
        });

        // Use the plugin with custome text for Read more and Read less.
        //Added custom class to Read More and Read less links
        $("#readMoreReadLess3").readMoreReadLess({
            readMoreText: 'Show more items ...',
            readLessText: 'Show fewer items ...',
            readMoreClass:'button',
            readLessClass:'button'
        });
    });
</script>

<?php
include './lib/templates/footer.php';


?>