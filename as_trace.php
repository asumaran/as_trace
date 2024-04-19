<?php
// opt = 0 (omits object), 1 (populates both indexes), 2 (omits object and args), 3 (omits args)
function as_trace($ntab = 1, $opt = 1, $limit = 0) {
	error_log('as_trace');
    $output = [];
    $backtrace = debug_backtrace($opt, $limit);

    foreach( $backtrace as $trace ) {
		$line = '';

		if ( isset( $trace[ 'file' ] ) ) {
			$line .= $trace['file'] . ':' . $trace['line'] . ': ';
		}
		
        if ( isset( $trace['class'] ) ) {
            $line .= $trace['class'];
        }

        if ( isset( $trace['object'] ) ) {
            $line .= '(' . get_class( $trace['object'] ) . ')';
        }

        if ( isset( $trace['type'] ) ) {
            $line .= $trace['type'];
        }
    
        if ( isset($trace['function'] ) ) {
            $line .= $trace['function'];
        
            $line .= '(';

            if ( isset( $trace[ 'args' ] ) ) {
				$line .= args_to_line( $trace['args'] );
			}

            $line .= ')';
            $output[] = $line;
        }
    }

    $tabs = str_repeat("\t", $ntab);
    $prefix = "\r\n" . $tabs;

    return $prefix. "> Stack trace: "  . $prefix . join($prefix, $output);
}

function is_instance($x) {
    // not an object, not an instance
    if (!is_object($x)) return false;
    return ($x = get_class($x)) && $x !== 'stdClass';
}

function args_to_line(Array $args) {
	$tmp = [];
	foreach ($args as $arg) {
		if ( is_null($arg)) {
			$tmp[] = 'NULL';
		} else if ( is_instance($arg) ) {
			$tmp[] = get_class($arg) . ' Object';
		} else if ( is_array($arg) ) {
			$tmp[] = '[' . args_to_line( $arg ) . ']';
		} else if ( is_object( $arg ) ) {
			$tmp[] =  get_class( $arg ) . ' Object';
		}else {
			$tmp[] = $arg;
		}
	}
	
	return join( ', ', $tmp );
}
