<!--        HTML Form for end user - reloads on same page -->
<form role="form" method="POST" action="<?php htmlentities($_SERVER["PHP_SELF"])?>">
    
    <div class="form-group form-group-lg">
        <label for="minnum">Mininum Value:</label>
        <input id="length" type="number" min="-2147483648" max="2147483647" name="minnum" maxlength="11" size="11" value="<?php if(isset($_POST['minnum'])) echo $_POST['minnum']; else echo '0'; ?>">
        
        <label for="maxnum">Maximum Value:</label>
        <input id="length" type="number" min="-2147483648" max="2147483647" name="maxnum" maxlength="11" size="11" value="<?php if(isset($_POST['maxnum'])) echo $_POST['maxnum']; else echo '10'; ?>">
        <br />
    </div>
    <div class="form-group form-group-lg">
        <label for="gennum">How many random numbers do you want to generate? </label>
        <input id="length" type="number" min="1" max="1000" name="gennum" maxlength="11" size="11" value="<?php if(isset($_POST['gennum'])) echo $_POST['gennum']; else echo '5'; ?>">
        <br />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
</form>
<!--End form-->

<?php

// Activates code block if submit button is clicked
    if(isset($_POST['submit'])){
        // Checks to see if size of password is provided
        if(isset($_POST['minnum'])){
            $minnum = $_POST['minnum'];
        }
        // Checks to see if size of password is provided
        if(isset($_POST['maxnum'])){
            $maxnum = $_POST['maxnum'];
        }
        // Checks to see if size of password is provided
        if(isset($_POST['gennum'])){
            $gennum = $_POST['gennum'];
        }

//        uses rand() function to generate a random number between min and max values
//        $random_number = mt_rand($minnum,$maxnum);
?>
        
<!--Output in a pre tag - allowing it to be scrolled for large number generations-->
<pre class="pre-scrollable"><?php 
    for($i=0;$i<$gennum;$i++)
    {
        $random_number = mt_rand($minnum,$maxnum);
        echo $random_number . "<br />";
    }
    ?></pre>

  
        <!--        Form input to display generated number - only appears if submitted -->
<!--        <input class="form-control" type="text" size="50" value="">-->
<?php
    }
?>
