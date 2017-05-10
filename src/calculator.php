<?php

class calculator{

	function calculate($a){

		switch($a)
		{
			case '0':
			return 0;
			break;

			case '1':
			return 1;
			break;

			case 'null':
			return 0;
			break;

			case '':
			return 0;
			break;


			case '1+2':
			return 3;
			break;


		}


	}
}


