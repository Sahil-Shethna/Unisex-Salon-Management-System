<?php
include './sql_connection.php';

$date=$_POST['date'];

        $sql1="select count(*) from tbl_appointment_order where Appointment_date='$date'";
        $sqll= mysqli_query($con, $sql1);
        $r= mysqli_fetch_array($sqll);
        $count=$r[0];
       
        $sql="select Appointment_time from tbl_appointment_order where Appointment_date='$date'";
                                        
        $sqlfire= mysqli_query($con, $sql);
                                        $i=0;
                                        $artime;
            while ($row1 = mysqli_fetch_array($sqlfire)) {
                                           
                                    $artime[$i]=$row1[0];        
                                        $i++;   
                                        }
                                        $a=$b=$c=$d=$e=$f=$g=$h=$i=0;
                                        
                                        for ($i=0;$i<$count;$i++)
                                        {
                                            $time=$artime[$i];
                                            
                                        if(strcmp("08 AM - 09 AM",$time))
                                        {
                                            $a++;
                                        }
                                        if($time=="09 AM - 10 AM")
                                        {
                                            $b++;
                                        }
                                        if($time=="10 AM - 11 AM")
                                        {
                                            $c++;
                                        }
                                        if(strcmp($time,"11 AM - 12 AM"))
                                        {
                                            $d++;
                                        }
                                        if($time=="12 PM - 01 PM")
                                        {
                                            $e++;
                                        }
                                        if($time=="01 PM - 02 PM")
                                        {
                                            $f++;
                                        }
                                        if($time=="02 PM - 03 PM")
                                        {
                                            $g++;
                                        }
                                        if($time=="03 PM - 04 PM")
                                        {
                                            $h++;
                                        }
                                        if($time=="04 PM - 05 PM")
                                        {
                                            $i++;
                                        }
                                        if($time=="05 PM - 06 PM")
                                        {
                                            $j++;
                                        }
                                        if($time=="06 PM - 07 PM")
                                        {
                                            $k++;
                                        }
                                        if($time=="07 PM - 08 PM")
                                        {
                                            @$l++;
                                        }
                                        
                                        }
                                        
?>


                                        
<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time : </label>
<select name="time" class="form-control">

    <option selected="selected" disabled="disabled">Select Time</option>

    <?php
    if($a<3)
    {
    echo "<option>08 AM - 09 AM</option>";
    }
    if($b<3)
    {
    echo "<option>09 AM - 10 AM</option>";
    }
    if($c<3)
    {
    echo "<option>10 AM - 11 AM</option>";
    }
    if($d<3)
    {
    echo "<option>11 AM - 12 PM</option>";
    }
    if($e<3)
    {
    echo "<option>12 PM - 01 PM</option>";
    }
    if($f<3)
    {
    echo "<option>01 PM - 02 PM</option>";
    }
    if($g<3)
    {
    echo "<option>02 PM - 03 PM</option>";
    }
    if($h<3)
    {
    echo "<option>03 PM - 04 PM</option>";
    }
    if($i<3)
    {
    echo "<option>04 PM - 05 PM</option>";
    }
    if($j<3)
    {
    echo "<option>05 PM - 06 PM</option>";
    }
    if($k<3)
    {
    echo "<option>06 PM - 07 PM</option>";
    }
    if($l<3)
    {
    echo "<option>07 PM - 08 PM</option>";
    }
    
    
    echo "</select>";
                                        

?>