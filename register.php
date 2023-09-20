
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
  <form id="contact" action="form_process.php" method="POST">
    <h3>Register for an event</h3>
    <br>
    <fieldset>
      <input type="text" name="std_name" placeholder="Enter student name" required>
    </fieldset>
       
      
      <fieldset>
            <input type="text" name="std_id" placeholder="Enter student id"required>

    </fieldset>
       
      <fieldset>
            <input type="text" name="evt_id" placeholder="Enter event id" required>

    </fieldset>
       
    <fieldset>
      <input type="text" name="email" placeholder="Enter email" required>
    </fieldset>
      
        
              
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Register</button>
    </fieldset>
      
  </form>
 
  
</div>
