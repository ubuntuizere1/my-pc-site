<?php 
                              
echo $row->showroom_name;
  
$conn = mysql_connect('localhost', 'root', 'esms') or die("Unable to connect to MySQL");
  
mysql_select_db('sh_sso', $conn); 
mysql_select_db('abans_crm', $conn);
  
$query_3 = "SELECT
                abans_crm.customers.added_date,
                abans_crm.customers.location_id
                FROM
                pc
                INNER JOIN sh_sso.showrooms 
                ON sh_sso.showrooms.showroom_id = abans_crm.customers.location_id
                WHERE
                abans_crm.customers.added_location = -99 AND
                abans_crm.customers.type_id = 1
                ORDER BY
                abans_crm.customers.location_id ASC";
                  
$retval = mysql_query($query_3);
                                                    
if(!$retval ) {
   die('Could not get data: ' . mysql_error());
}

$select_month = '2';                                   
$select_year = '2016'; 

$days = cal_days_in_month(CAL_GREGORIAN,$select_month,$select_year);

while ($row2 = mysql_fetch_assoc($retval)){
                        
    $year = date('Y',strtotime($row2['added_date']));
    $month = date('m',strtotime($row2['added_date']));
    $date = date('m',strtotime($row2['added_date']));
                        
    $showroom_id = $row2['location_id'];
                       
    if($year == $select_year && $month == $select_month){
      
        for($a = 1; $a <= $days; $a++){
           echo "<td id=".$a.">".$count."</td>"; 
        }

    }
 }
?>