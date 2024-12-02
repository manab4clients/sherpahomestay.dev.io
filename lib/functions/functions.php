<?php
function hrefPhoneNumber($phoneNumber)
{
    // Remove all non-numeric characters
    $numericOnly = preg_replace('/\D/', '', $phoneNumber);

    // Check if the number starts with '+91' and remove the '+'
    if (substr($numericOnly, 0, 2) === '91') {
        return $numericOnly; // Number is already formatted correctly
    }

    // Add '91' prefix if not present
    return '91' . $numericOnly;
}
