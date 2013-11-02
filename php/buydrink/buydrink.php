<?php

return process_and_save($_REQUEST);

function process_and_save($input) {
    var $recipient = $input['recipient'];
    var $buyer = $input['buyer'];
    
    return $recipient . " " . $buyer;
}
