<?php
function get_data()
{
	//file name from config
	$fname = CONFIG['data_file'];

	$json = '';

	if (!file_exists($fname)) {
		file_put_contents($fname, ''); //Write data to a file This function is identical to calling fopen(), fwrite() and fclose() successively to write data to a file.
	} else {
		$json = file_get_contents($fname); //Reads entire file into a string This function is similar to file(), except that file_get_contents() returns the file in a string, starting at the specified offset up to length bytes. On failure, file_get_contents() will return false .
	}

	return $json;
}


