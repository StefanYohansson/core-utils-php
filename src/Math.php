<?php

class Math {

    /**
     * Clamp value in a range [$min..$max].
     * @param $min Minimum.
     * @param $value Value.
     * @param $min Maximum.
     */
    public static function clamp($min,$value,$max) {
        return $value < $min ? $min : ($value > $max ? $max : $value);
    }

}