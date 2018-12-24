<?php

// People to contact
// Set both to null to not display any contact information
$config['contact']['name'] = 'me@varunpriolkar.com';
$config['contact']['mail'] = 'me@varunpriolkar.com';

// Frontpage configuration

// Title of the page
$config['frontpage']['title'] = 'AS132383 Looking Glass';
$config['frontpage']['header_link'] = 'https://as132383.net';
// Logo to display (remove it to not display any logo)
$config['frontpage']['image'] = 'cartoon-blowfish.png';
// Disclaimer to inform people using the looking glass
// Set it to null to not display a disclaimer
$config['frontpage']['disclaimer'] = 'IPv6 only. IPv4 will not work. All commands will be logged for possible later analysis and statistics.';

// Things to remove from the output (PHP compatible regex)
$config['filters']['output'][] = '/(client1|client2)/';
$config['filters']['output'][] = '/^NotToShow/';
// If telnet is used in combination with extreme_netiron, uncomment the following filter
//$config['filters']['output'][] = '/([^\x20-\x7E]|User|Please|Disable|telnet|^\s*$)/';
$config['frontpage']['peering_policy_file'] = '/var/www/html/looking-glass/peering';



$config['recaptcha']['enabled'] = false;
$config['recaptcha']['apikey'] = 'foobar';
$config['recaptcha']['secret'] = 'foobar';

// Routers definitions

// Router based on BIRD
// The hostname or the IP address
$config['routers']['router1']['host'] = '193.25.100.59';
// The user to use to connect to the router
$config['routers']['router1']['user'] = 'root';
// The password of the given user
$config['routers']['router1']['private_key'] = '/home/test';
// The authentication mechanism to use (can be ssh-password or ssh-key)
$config['routers']['router1']['auth'] = 'ssh-key';
// The router type (can only be bird)
$config['routers']['router1']['type'] = 'bird';
// The router source address to be used
//$config['routers']['router3']['source-interface-id'] = '193.25.100.59';
// The router description to be displayed in the router list
$config['routers']['router1']['desc'] = 'FIRST ROOT(AS41108) - DUSSELDORF, GERMANY';
$config['routers']['router1']['disable_ipv4'] = true;

$config['routers']['router2']['host'] = '149.28.138.67';
// The user to use to connect to the router
$config['routers']['router2']['user'] = 'root';
// The password of the given user
$config['routers']['router2']['private_key'] = '/home/test';
// The authentication mechanism to use (can be ssh-password or ssh-key)
$config['routers']['router2']['auth'] = 'ssh-key';
// The router type (can only be bird)
$config['routers']['router2']['type'] = 'bird';
// The router source address to be used
//$config['routers']['router3']['source-interface-id'] = '193.25.100.59';
// The router description to be displayed in the router list
$config['routers']['router2']['desc'] = 'VULTR(AS41108) - SINGAPORE';
$config['routers']['router2']['disable_ipv4'] = true;


// If running on *BSD, disable '-A' which is non-existent
$config['tools']['ping_options'] = '-c 5';
// If running on *BSD, disable '-N' which is non-existent
$config['tools']['traceroute_options'] = '-A -q1 -w2 -m15';
// If running on *BSD, there is no '-4' or '-6'
$config['tools']['traceroute6'] = 'traceroute6';
$config['tools']['traceroute4'] = 'traceroute';

$config['doc']['as-path-regex']['command'] = null;

// End of config.php
//
//logs
$config['logs']['file'] = '/var/log/looking-glass.log';
$config['logs']['format'] = '[%D] [client: %R] %H > %C';
