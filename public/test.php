<?php 
require '../app/start.php';

?>



<div class="row">
  <div class="small-12 small-centered columns">
      <form action="showSchoolMembers.php"  method="post">
        
      <fieldset class="fieldset">
        <legend>Select Schools</legend>
        <div class="row">
          <div class="large-12 columns">
            <label>Schools
              <select multiple>
                <option value="showboat">Showboat</option>
                <option value="redwing">Redwing</option>
                <option value="narcho">Narcho</option>
                <option value="hardball">Hardball</option>
            </select>
            </label>
          </div>
        </div>

      </fieldset>

        <a class="button large" href="showSchoolMembers.php">View Members</a>
      </form>
</section>


 <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>