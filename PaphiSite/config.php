<?php


//
// Mailing list settings
// --------------------------------------------------------------------------------------------

// Set to true if you want to use Mailchimp to collect addresses. Otherwise, set to false.
$use_Mailchimp = true;

// Fill in you API Key here if the above option is true
$mailchimp_API_Key = 'd991acc3988e61e13b3037fc9f5feec0-us3';

// The ID of the mailchimp list where you want to save the contacts
$mailchimp_list_ID = 'e41f51cf40';


// The emails are saved to this file if not using Mailchimp. Use a random name that can't be easily guessed.
$maillist_file = 'mail-list_FJdfjfk4FGeWR.txt';



//
// Contact form settings
// -------------------------------------------------------------------------------------------

// This is the email address where you'll receive the contact form messages
$target_address = 'uwpaphi@u.washington.edu';

// Prefix for the email subject. Useful for filtering mail.
$subject_prefix = 'Rushee message from - ';
?>