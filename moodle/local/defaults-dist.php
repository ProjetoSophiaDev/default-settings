<?php
$defaults['moodle']['summary'] = 'Moodle Test Site! '; // for core settings
$defaults['moodle']['noreplyaddress'] = 'sophia-mailer@mail.ct.utfpr.edu.br';
$defaults['moodle']['custommenuitems'] = 'Tema
-Academi | https://mytesturl/?theme=academi
-Boost | https://mytesturl/?theme=boost
-Clássico | https://mytesturl/?theme=classic
-Eguru | https://mytesturl/?theme=eguru
-Klass | https://mytesturl/?theme=klass
Criação de curso | https://mytesturl/course/request.php
';

$defaults['moodle']['timezone'] = 'America/Sao_Paulo';
$defaults['moodle']['defaultcity'] = 'Curitiba';

$defaults['moodle']['pathtophp'] = '/usr/bin/php';
$defaults['moodle']['pathtodu'] = '/usr/bin/du';
$defaults['moodle']['aspellpath'] = '/usr/bin/aspell';
$defaults['moodle']['pathtogs'] = '/usr/bin/gs';
$defaults['moodle']['pathtodot'] = '/usr/bin/dot';
$defaults['moodle']['pathtopython'] = '/usr/bin/python3';

$defaults['moodle']['auth_instructions'] = 'Usuário: admin
Senha: myadmpass';
$defaults['moodle']['forcelogin'] = 1;

// $defaults['moodle']['converter_plugins_sortorder'] = 'unoconv'; // Not worked fileconverter_unoconv

$defaults['backup']['backup_auto_active'] = 2; // Manual
$defaults['backup']['backup_auto_storage'] = 2; // Save on backup area and external location
$defaults['backup']['backup_auto_destination'] = '/mnt/mdl/bkp/auto';
$defaults['backup']['backup_auto_skip_modif_prev'] = 0; // 

$defaults['auth_ldap']['user_attribute'] = 'uid'; // 
$defaults['auth_ldap']['search_sub'] = 1; // 
$defaults['auth_ldap']['field_map_firstname'] = 'givenName'; // 
$defaults['auth_ldap']['field_map_lastname'] = 'sn'; // 
$defaults['auth_ldap']['field_map_email'] = 'mail'; // 
$defaults['auth_ldap']['host_url'] = 'ldap.cogeti.ct.internal'; // 
$defaults['auth_ldap']['contexts'] = 'ou=todos,dc=utfpr,dc=edu,dc=br'; // 
$defaults['moodle']['auth'] = 'email,ldap';
