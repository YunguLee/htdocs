<?php
$location=$_POST["location"];
print $location;
if(isset($location))
{
    print "area is".$location;
}
else
{
    print "Select area";
}

?>