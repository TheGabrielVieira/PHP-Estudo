<?php

    function divisao($divivendo, $divisor)
    {
        try{ 
            if ($divisor == 0)
            {
                throw new RangeException("O Numero não pode ser dividido por zero");
            }

            $resultado = $divivendo / $divisor;

            echo "O resultado é: " . $resultado;
            }catch(Exception $e)
            {
                //echo $e -> getMessage();
                echo "O Numero não pode ser dividido por zero";
            }
            finally
            {
                echo "<br> Tratamendo de execção";
            }
    }

    divisao(10,0);