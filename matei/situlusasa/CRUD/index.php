<?php
   include_once ("conexiune.php");
   $result = mysqli_query($mysqli, "SELECT * FROM elevi"); ?>
<html>
   <head>
      <title>Homepage</title>
      <link rel="stylesheet" href="styles.css">
      <style>

         * {
         padding: 0;
         margin: 0;
         
         }

         table { 
         border-collapse: collapse;
         margin-top: 10px;
         margin-left: 10px;
         margin-right: 10px;
         font-family: Arial, Helvetica, sans-serif;
         }
         td { 
         padding: 10px; 
         border: 1px solid #ccc; 
         text-align: center; 
         font-size: 18px;
         }
         .buttonstyle{
         background-color: #4CAF50; 
         border: none;
         color: white;
         padding: 8px 32px;
         text-align: center;
         border-radius: 2px;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin-left: -10px;
         cursor: pointer;
         }
         .trstyle{
         background-color: #4CAF50;
         color: white;
         text-transform: uppercase;
         border-radius: 10px;
         }
         .content{
         display: grid;
         grid-template-rows: 10% 90%;
         }
         .add-button{
         padding: 16px;
         justify-self: end;
         }
         a{
         text-decoration: none;
         color: black;
         }
      </style>
   </head>
   <body>
      <div class="content">
         <div>

            <table width='99%' border=0>
               <tr class="trstyle">
                  <td>id</td>
                  <td>nume</td>
                  <td>prenume</td>
                  <td>adresa</td>
                  <td>email</td>
                  <td>data_nasterii</td>
                  <td>sex</td>
                  <td>media_bac</td>
                  <td>Actiune</td>
               </tr>
               <?php
                  while ($res = mysqli_fetch_array($result))
                  {
                  echo "<tr>";
                  echo "<td>" . $res['id'] . "</td>";
                  echo "<td>" . $res['nume'] . "</td>";
                  echo "<td>" . $res['prenume'] . "</td>";
                  echo "<td>" . $res['adresa'] . "</td>";
                  echo "<td>" . $res['email'] . "</td>";
                  echo "<td>" . $res['data_nasterii'] . "</td>";
                  echo "<td>" . $res['sex'] . "</td>";
                  echo "<td>" . $res['media_bac'] . "</td>";
                  echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>  <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Sigur doresti sa stergi aceasta inregistrare?')\">Delete</a></td>";
                  }
                  ?>
            </table>
            
            <div class="add-button">
               <form method="POST" action="add.html">
                  <input class="buttonstyle" type="submit" value="Adaugă elev">
               </form>
            </div>

         </div>
      </div>
   </body>
</html>