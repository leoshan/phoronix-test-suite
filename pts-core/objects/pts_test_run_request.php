<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2009, Phoronix Media
	Copyright (C) 2009, Michael Larabel

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

class pts_test_run_request
{
	var $test_identifier;
	var $test_arguments;
	var $test_arguments_description;

	public function __construct($test_identifier, $test_arguments = "", $test_arguments_description)
	{
		$this->test_identifier = $test_identifier;
		$this->test_arguments = $test_arguments;
		$this->test_arguments_description = $test_arguments_description;
	}
	public function get_identifier()
	{
		return $this->test_identifier;
	}
	public function get_arguments()
	{
		return $this->test_arguments;
	}
	public function get_arguments_description()
	{
		return !empty($this->test_arguments_description) ? $this->test_arguments_description : $this->get_arguments();
	}
	public function __toString()
	{
		return $this->get_identifier();
	}
}

?>
