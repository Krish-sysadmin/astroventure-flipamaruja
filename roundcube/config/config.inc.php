<?php

/* Local configuration for Roundcube Webmail */

// ----------------------------------
// SQL DATABASE
// ----------------------------------
// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql, sqlsrv, oracle
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// Note: for SQLite use absolute path (Linux): 'sqlite:////full/path/to/sqlite.db?mode=0646'
//       or (Windows): 'sqlite:///C:/full/path/to/sqlite.db'
// Note: Various drivers support various additional arguments for connection,
//       for Mysql: key, cipher, cert, capath, ca, verify_server_cert,
//       for Postgres: application_name, sslmode, sslcert, sslkey, sslrootcert, sslcrl, sslcompression, service.
//       e.g. 'mysql://roundcube:@localhost/roundcubemail?verify_server_cert=false'
$config['db_dsnw'] = 'mysql://roundcubeuser:password@localhost/roundcube';

$config['imap_conn_options'] = array(
    'ssl' => array('verify_peer' => true, 'verfify_peer_name' => false),
    'tls' => array('verify_peer' => true, 'verfify_peer_name' => false),
);


// ----------------------------------
// IMAP
// ----------------------------------
// The IMAP host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// Enter hostname with prefix ssl:// to use Implicit TLS, or use
// prefix tls:// to use STARTTLS.
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
// WARNING: After hostname change update of mail_host column in users table is
//          required to match old user data records with the new host.
$config['default_host'] = 'ssl://mail.astroventure.org';

// TCP port used for IMAP connections
$config['default_port'] = 993;

// ----------------------------------
// SMTP
// ----------------------------------
// SMTP server host (for sending mails).
// Enter hostname with prefix ssl:// to use Implicit TLS, or use
// prefix tls:// to use STARTTLS.
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %t = domain.tld
$config['smtp_server'] = 'tls://mail.astroventure.org';

// SMTP socket context options
// See http://php.net/manual/en/context.ssl.php
// The example below enables server certificate validation, and
// requires 'smtp_timeout' to be non zero.
// $config['smtp_conn_options'] = array(
//   'ssl'         => array(
//     'verify_peer'  => true,
//     'verify_depth' => 3,
//     'cafile'       => '/etc/openssl/certs/ca.crt',
//   ),
// );
// Note: These can be also specified as an array of options indexed by hostname
$config['smtp_conn_options'] = array (
  'ssl' => 
  array (
    'peer_name' => 'mail.astroventure.org',
    'cafile' => '/etc/pki/tls/certs/ca-bundle.trust.crt',
  ),
);

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = 'mailto:stellaralways@firemail.cc';

// Logo image replacement. Specifies location of the image as:
// - URL relative to the document root of this Roundcube installation
// - full URL with http:// or https:// prefix
// - URL relative to the current skin folder (when starts with a '/')
//
// An array can be used to specify different logos for specific template files
// The array key specifies the place(s) the logo should be applied to and
// is made up of (up to) 3 parts:
// - skin name prefix (always with colon, can be replaced with *)
// - template name (or * for all templates)
// - logo type - it is used for logos used on multiple templates
//   the available types include '[favicon]' for favicon, '[print]' for logo on all print
//   templates (e.g. messageprint, contactprint) and '[small]' for small screen logo in supported skins
//
// Example config for skin_logo

   array(
     // show the image /images/logo_login_small.png for the Login screen in the Elastic skin on small screens
     "elastic:login[small]" => "/images/daemon.png",
     // show the image /images/logo_login.png for the Login screen in the Elastic skin
     "elastic:login" => "/images/daemon.png",
     // show the image /images/logo_small.png in the Elastic skin
     "elastic:*[small]" => "/images/daemon.png",
     // show the image /images/larry.png in the Larry skin
     "larry:*" => "/images/daemon.png",
     // show the image /images/logo_login.png on the login template in all skins
     "login" => "/images/daemon.png",
     // show the image /images/logo_print.png for all print type logos in all skins
     "[print]" => "/images/daemon.png",
   );

$config['skin_logo'] = 'https://mail.astroventure.org/logo.jpeg';

// This key is used for encrypting purposes, like storing of imap password
// in the session. For historical reasons it's called DES_key, but it's used
// with any configured cipher_method (see below).
// For the default cipher_method a required key length is 24 characters.
$config['des_key'] = 'xcJInlIbMHFddPuJ3utuPtSX';

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'Astroventure Webmail';

// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = array('acl', 'additional_message_headers', 'archive', 'attachment_reminder', 'autologon', 'database_attachments');

// compose html formatted messages by default
//  0 - never,
//  1 - always,
//  2 - on reply to HTML message,
//  3 - on forward or reply to HTML message
//  4 - always, except when replying to plain text message
$config['htmleditor'] = 2;

$config['identities_level'] = 1;

// $config['username_domain'] = 'astroventure.org';


$config['mail_domain'] = 'astroventure.org';
