<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/style.css" />
    <title> Таблицы истинности и сравнения</title>
  </head>
<body>
  
  <div class="box_table ">
    <div class="heading">
      <h1>Таблица истинности PHP</h1>
    </div>
    <div>
      <table>
          <tr>
              <td class="title table1">A</td>
              <td class="title table1">B</td>
              <td class="title table1">!A</td>
              <td class="title table1">A || B</td>
              <td class="title table1">A && B</td>
              <td class="title table1">A xor B</td>
          </tr>
          <?php 
          for ($i=1;$i<=4;$i++){
            echo "<tr>";
            for ($j=1;$j<=6;$j++){
              switch ($i){
                case '1':
                  $a=false;
                  $b=false;
                  break;
                case '2':
                  $a=false;
                  $b=true;
                  break;
                case '3':
                  $a=true;
                  $b=false;
                  break;
                case '4':
                  $a=true;
                  $b=true;
                  break;
              }
              switch ($j){
                case '1':
                  $output=(integer)$a;
                  break;
                case '2':
                  $output=(integer)$b;
                  break;
                case '3':
                  $output=(integer)!$a;
                  break;
                case '4':
                  $output=(integer)($a||$b);
                  break;
                case '5':
                  $output=(integer)($a&&$b);
                  break;
                case '6':
                  $output=(integer)($a xor $b);
                  break;
              }
              echo "<td table1>$output</td>";
            }
            echo "</tr>";
          }        
          ?>     
      </table>
    </div>
  </div>

  <div class="box_table ">
    <div class="heading">
      <h1>Гибкое сравнение в PHP</h1>
    </div>
    <div>
      <table>
          <?php
          $values = [true, false, 1, 0, -1, '1',null, 'php'];
          $values_string = ['','true', 'false', '1', '0', '-1', '"1"','null', '"php"'];
          $output="не определен";
          
          for ($i=-1;$i<=7;$i++){
            
            echo "<tr>";
            for ($j=-1;$j<=7;$j++){

              if ($i===-1){
                $output = $values_string[$j+1];
                echo "<td class=\"title table2\">$output</td>";    
              } else if ($j===-1 && $i>=0){
                $output = $values_string[$i+1];
                echo "<td class=\"title table2\">$output</td>";  
              } else {
                $output = (integer)($values[$i] == $values[$j]);
                echo "<td class=\"table2\">$output</td>";  
              }
        
            }
            echo "</tr>";
          }
          ?>     
      </table>
    </div>
  </div>

  <div class="box_table ">
    <div class="heading">
      <h1>Жёсткое сравнение в PHP</h1>
    </div>
    <div>
      <table>
          <?php
          $values = [true, false, 1, 0, -1, '1',null, 'php'];
          $values_string = ['','true', 'false', '1', '0', '-1', '"1"','null', '"php"'];
          $output="не определен";
          
          for ($i=-1;$i<=7;$i++){
            
            echo "<tr>";
            for ($j=-1;$j<=7;$j++){

              if ($i===-1){
                $output = $values_string[$j+1];
                echo "<td class=\"title table2\">$output</td>";    
              } else if ($j===-1 && $i>=0){
                $output = $values_string[$i+1];
                echo "<td class=\"title table2\">$output</td>";  
              } else {
                $output = (integer)($values[$i] === $values[$j]);
                echo "<td>$output</td table2>";  
              }
        
            }
            echo "</tr>";

          }
          ?>     
      </table>
    </div>
  </div>
    
</body>