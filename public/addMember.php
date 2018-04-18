
<?php 

require '../app/start.php';
//require '.../.../public/header.php';
?>
<section>
    
    
<div class="row">
  <div class="small-12 small-centered columns">
      <form action=""  method="">
        
    <fieldset class="fieldset">
    <legend>Member information:</legend>
        <div class="row">
          <div class="large-4 columns">
            <label>First Name
              <input type="text" placeholder="Text here" />
            </label>
          </div>
          <div class="large-4 columns">
            <label>Last Name
              <input type="text" placeholder="Text here" />
            </label>
          </div>
          <div class="large-4 columns">
            <div class="row collapse">
              <label>email</label>
              <div class="small-9 columns">
                <input type="text" placeholder="Text here" />
              </div>
              <div class="small-3 columns">
                <span class="postfix"></span>
              </div>
            </div>
          </div>
        </div>
      </fieldset>

      <fieldset class="fieldset">
        <legend>Select Schools</legend>
          <label>Multiple Select Menu
            <select multiple>
                <option value="<?php ?>">Abbe Hall</option>
                <option value="<?php ?>">Watford Grammer School for Girls</option>
                <option value="<?php ?>">Concord College</option>
                <option value="<?php ?>">Reodean School</option>
                <option value="<?php ?>">Univesity of Sessex</option>
                <option value="<?php ?>">Apha Plus Group</option>
            </select>
      </label>

        </fieldset>

        <a class="button large" href="../app/controller.php">Save</a>
    
    

    
</section>



 <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>