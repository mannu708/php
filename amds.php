<?php
$a=1;
switch ($a) {
    case 1:
        $x=20;
        $y=30;
        $z=$x+$y;
        echo "addition is:$z";
        break;
        case 2:
            $x=20;
            $y=30;
            $z=$x-$y;
            echo "subtraction is: $z";
            break;
            case 3:
                $x=20;
                $y=30;
                $z=$x*$y;
                echo "Multiply is:$z";
                break; 
                case 4:
                    $x=20;
                    $y=30;
                    $z=$x/$y;
                    echo "Devision is:$z";
                    break;       
    
    default:
        echo "this opreation is not allowed";
        break;
}
?>