<html>
    <head>
      <style>
    .tbl-full{
    width:100%;
}
.tbl-30{
    width:30%;
}
      </style>
        <tittle>Dhis2 Data set</tittle>
    </head>
    <body>
        <form>
        <table class="tbl-full">
    <tr>
    <th>Product</th>
    <th>Beginning Balance</th>
    <th>Quantity Dispensed</th>
    <th>Closing Balance</th>
    <th>Actions</th>
    </tr>
    <tr>
    <td>Product 1</td>
  </tr>
  <tr>
    <td>Product 2</td>
  </tr>
  <tr>
    <td>Product 2</td>
  </tr>
  <?php
    // database connection
    $host = "localhost";
    $username ="root";
    $password = "";
    $dbname = "dhis2";
    //connect to the database
    $conn =mysqli_Connect($host, $username, $password, $dbname) or die(mysqli_error());
    //query to get all admins
    $sql="SELECT * FROM dataset";
    //execute the query
    $res=mysqli_query($conn, $sql);
     
    //check whether the query is executed or notn
    if($res==TRUE)
    {
        //count rows to check whether we have data in the database or not
        $count = mysqli_num_rows($res); //function to get all the rows in the database

        $sn=1; //create a variable and assign the value

        //check the num of rows
        if($count>0)
        {
            //we have data in database  
            while($rows = mysqli_fetch_assoc($res))
            {
                //using while loop to get data from database
                //and while loop will run as long as we have data in database
               
                //get individual data
                $id=$rows['beginningBalance'];
                $full_name=$rows['quantityDispensed'];
                $username=$rows['closingBalance'];

                //display the values in our table
                ?>

                     <tr>
                        <td><?php echo $beginningBalance; ?></td>
                        <td><?php echo $quantityDispensed; ?></td>
                        <td><?php echo $closingBalance; ?></td>
                     </tr>

                <?php

                              }
                               
                          }
                          else {
                    //we do not have data in the database
                      }
                  
                      }
                      
                      ?>
</table>
        </form>
        

    </body>
</html>