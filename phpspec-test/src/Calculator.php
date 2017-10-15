<?php

namespace Predmond\Calculator;
use Predmond\Calculator\DivisionByZeroException;

class Calculator
{
	public function add($x, $y){
		return $x + $y;
	}

    public function divide($x, $y)
	{
		if ($y === 0) {
	        throw new DivisionByZeroException();
	    }

	    return $x / $y;
	}
}
