<?php
class DivideByZeroException extends Exception{};
class DivideByNegativeException extends Exception{};
function process ($denominator){
    try{
        if($denominator == 0){
            throw new DivideByZeroException();
        }   elseif($denominator <0){
            throw new DivideByNegativeException();
        }   else{
            echo (25 / $denominator);
        }
    } catch (DivideByZeroException $ex){
        echo "發生被0 除的意外！";
    } catch (DivideByNegativeException $ex){
        echo"發生負數意外！";
    } catch (Exception $e){
        echo "未知的意外";
    }
}

process("100");
?>
