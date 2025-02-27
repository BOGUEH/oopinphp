<?php 

        class Calc {

            public $num1;
            public $num2;
            public $operator;

            function __construct($one, $two, $opera) {
                $this->num1 = $one;
                $this->num2 = $two;
                $this->operator = $opera;

            }

            function operate() {
                switch($this->operator) {
                    case "addition":
                        $result = $this->num1 + $this->num2;
                        return $result;
                        break;
                    case "subtraction":
                        $result = $this->num1 - $this->num2;
                        return $result;
                        break;
                    case "multiplication":
                        $result = $this->num1 * $this->num2;
                        return $result;
                        break;
                    case "division":
                        $result = $this->num1 / $this->num2;
                        return $result;
                        break;

                        default:
                        echo "error";
                        break;
                    

            }
        }
    }
?>