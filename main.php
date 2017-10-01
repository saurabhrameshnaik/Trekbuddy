<?php
session_start();
if(!isset($_SESSION['logged_in']))
  {
    header('Location:./index.php');
  }

require_once('./Templates/header.php');
?>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
                                      <!-- Links parimal-->
                                            <table> 

                                             
                                            <tr> 
                                            <td> Add Guide info : </td>
                                            <td> <a href="addguide.php" > Click here</a> </td>
                                            </tr>

                                            <tr> 
                                            <td>Add Place info :  </td>
                                            <td> <a href="addplaceform.php" > Click here</a> </td>
                                            </tr>

                                            </table> 
                                      <!-- -->

</div>

<div class="col-sm-2">
</div>

</div>
<?
require_once('./Templates/footer.php');

