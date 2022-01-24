<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<p><center><font color='#E5E4E2'><h2>รายงานสถานการณ์โควิด 19 แยกจังหวัด</h2></center></p>";
  echo "<body style = 'background-color:#123456'>";
  echo "<p><center><table border='1'>";
  echo "<tr>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ลำดับ</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>จังหวัด</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ผู้ป่วยใหม่</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ผู้ป่วยรวม</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ผู้ป่วยในประเทศ</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ผู้ป่วยรวมในประเทศ</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ผู้เสียชีวิตใหม่</b></font></center></td>
        <td style ='background-color:#808080'><font color='DCDCDC'><b>ผู้เสียชีวิตรวม</b></font></center></td></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td style ='background-color:#D1D0CE'><center>";
    echo ($key+1);
    echo "</center></td>";
    
    echo "<td style ='background-color:#C0C0C0'><center>";
    echo $val->province;
    echo "</center></td>";
    
    echo "<td style ='background-color:#D1D0CE'><center>";
    echo $val->new_case;
    echo "</center></td>";
    
    echo "<td style ='background-color:#C0C0C0'><center>";
    echo $val->total_case;
    echo "</center></td>";
    
    echo "<td style ='background-color:#D1D0CE'><center>";
    echo $val->new_case_excludeabroad;
    echo "</center></td>";
    
    echo "<td style ='background-color:#C0C0C0'><center>";
    echo $val->total_case_excludeabroad;
    echo "</center></td>";
    
    echo "<td style ='background-color:#D1D0CE'><center>";
    echo $val->new_death;
    echo "</center></td>";
    
    echo "<td style ='background-color:#C0C0C0'><center>";
    echo $val->total_death;
    echo "</center></td>";
    echo "</tr>";
  }
  echo "</table></center><p>"; 

  echo "<br>";
  echo "<center><font color='#E5E4E2'><p><b>วันที่อัปเดต</b></p></center>";
  echo "<p><center>". $val->txn_date."</center></p>";
?>
