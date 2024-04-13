<?php

    function f1()
    {
        echo ">f1 esta antes da exceção" . "<br/>";
    }

    function f2($int)
    {
        if (!is_int($int))
        {
            throw new Exception("O argumento não é do tipo esperado");
        }
        else
        {
            echo ">f2 não é exceção" . "<br/>";
        }

        f3();
    }

    function f3()
    {
        echo ">f3 está depois da exceção" . "<br/>";
    }

    f1();
    f2(
        int: 5
    );