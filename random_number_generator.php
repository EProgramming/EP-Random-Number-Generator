<!--Script created by Nazmus at www.EasyProgramming.net -->

<html xmlns="http://www.w3.org/1999/xhtml">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<body>
    <div class="container">
    <div class="row container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
<h2>EP Random Password Generator</h2>
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
        // Checks the minimum value 
        if(isset($_POST['minnum'])){
            $minnum = $_POST['minnum'];
        }
        // Checks the maximum value
        if(isset($_POST['maxnum'])){
            $maxnum = $_POST['maxnum'];
        }
        // Checks the number of numbers to be generated
        if(isset($_POST['gennum'])){
            $gennum = $_POST['gennum'];
        }
?>
<!--Output in a pre tag - allowing it to be scrolled for large number generations-->
<pre class="pre-scrollable"><?php 
    for($i=0;$i<$gennum;$i++)
    {
        $random_number = mt_rand($minnum,$maxnum);
        echo $random_number . "<br />";
    }
    ?></pre>
<?php
    }
?>
