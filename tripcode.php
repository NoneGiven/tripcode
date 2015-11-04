function error_handler($severity, $message, $filename, $line) {
    if ($severity > 0) {
        throw new ErrorException($message, 0, $severity, $filename, $line);
    }
}

function make_tripcode($pass) {
    if ($pass === NULL || $pass === "") {
        return "";
    }
    $pass = htmlspecialchars($pass); // don't replace apostrophes
    $num_chars = iconv_strlen($pass, "UTF-8");
    $conv = "";
    for ($i = 0; $i < $num_chars; $i++) {
        try {
            $conv .= iconv("UTF-8", "CP932", iconv_substr($pass, $i, 1, "UTF-8"));
        }
        catch (Exception $ex) {
            $conv .= "?";
        }
    }
    $salt = strtr(preg_replace("/[^\.-z]/", ".", substr($conv . "H.", 1, 2)), ":;<=>?@[\\]^_`", "ABCDEFGabcdef");
    $trip = substr(crypt($conv, $salt), -10);
    return "!" . $trip;
}

set_error_handler("error_handler"); // need to catch iconv's conversion failure E_NOTICE
