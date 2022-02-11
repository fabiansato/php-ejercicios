<?php
    function isPrime($num){
      

        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0){
                
                return "$num is not prime";
            }
        };
        return "$num is prime";
    }

   echo isPrime(12);
