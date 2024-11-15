<?php 
    $d = date("D");
    switch ($d) {
        case "Mon":
            echo "ចន្ទ";
            break;
        case "Tue":
            echo "អង្គារ";
            break;
        case "Wed":
            echo "ពុធ";
            break;
        case "Thu":
            echo "ព្រហស្បតិ៍";
            break;
        case "Fri":
            echo "សុក្រ";
            break;
        case "Sat":
            echo "សៅរ៍";
            break;
        case "Sun":
            echo "អាទិត្យ";
            break;
    }
?>
<br>
<?php 
    function greet($name){
        echo "Welcome, " . $name;
    }

    greet("seth");
    
?>
