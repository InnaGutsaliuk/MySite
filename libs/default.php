<?php

function wtf($array, $stop = false) {
	echo '<pre>'.print_r($array,1).'</pre>';
	if(!$stop) {
		exit();
	}
}

function trimAll($el) {
	if (!is_array($el)) {
		$el = trim($el);
	} else {
		$el = array_map('trimAll', $el);
	}
	return $el;
}

function intAll($el) {
	if (!is_array($el)) {
		$el = (int)$el;
	} else {
		$el = array_map('intAll', $el);
	}
	return $el;
}

function floatAll($el) {
	if (!is_array($el)) {
		$el = (float)$el;
	} else {
		$el = array_map('floatAll', $el);
	}
	return $el;
}

function es($el, $key = 0) {
	if (!is_array($el)) {
		$el = DB::_($key) -> real_escape_string($el);
	} else {
		$el = array_map('es', $el, $key);
	}
	return $el;
}

function hs($el) {
	if (!is_array($el)) {
		$el = htmlspecialchars($el);
	} else {
		$el = array_map('hs', $el);
	}
	return $el;
}

function q($query, $key = 0) {
	$res = DB::_($key) -> query($query);
	if ($res === false) {
		$debug = debug_backtrace();

		$error = date('d-m-Y H:i:s').'<br>';
		$error .= 'ERROR QUERY: '.$query.'<br>';
		$error .= 'IN LINE: '.$debug[0]['line'].'<br>';
		$error .= 'IN FILE: '.$debug[0]['file'].'<br>';
		$error .= mysqli_error(DB::_($key)).'<br>';

		echo $error;
		file_put_contents('./logs/mysql.log', strip_tags($error)."\n\n", FILE_APPEND);
		exit();
	} else {
		return $res;
	}
}

function myHash($var) {
	$salt1 = 'qwer';
	$salt2 = 'asdf';
	$var = crypt(md5($salt1.$var), $salt2);
	return $var;
}
