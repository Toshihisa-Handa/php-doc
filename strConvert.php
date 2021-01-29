<?php
class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}

// 'StrValTest' と表示します
echo strval(new StrValTest);
?>