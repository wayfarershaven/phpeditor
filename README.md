## PEQ PHP Editor

#### IMPORTANT NOTE: Apache 2.2 and PHP 5.6 and earlier are deprecated. Support for these versions is no longer provided and all references will be removed in future updates.

### Requirements
* Apache 2.4
* PHP 7
* MySQL 5 or MariaDB 10

*For more help on getting Apache, PHP, or the Editor itself set up, visit us on Discord at https://discord.com/channels/212663220849213441/926285855457435658*

For Linux users, note the following.
* Permissions: If you choose to store these files outside of your normal html directory, ensure your symbolic link and physical folder have the same permissions. (Recommend 755 for folders and 644 for files)
* AutoUpdate: You can set the AutoUpdate file with the execute flag and run to pull the latest from git and fix permissions if any were changed.

### Installation

1) Install Apache and PHP. You can get from www.apache.org and www.php.net or get an all-in-one package such as XAMPP from www.apachefriends.org.

2) Configure Apache and PHP as needed, but make sure you allow short tags (short_open_tag = On). Also recommend you suppress STRICT, NOTICE, and DEPRECATED messages under error_reporting (E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED). Also, ensure you have the php-mysql extension loaded.

3) Unzip or checkout the files into your public html directory (such as /htdocs/peqedit) or set up an alias outside that directory if you desire.

4) From the sql directory, source schema.sql into your database. You should also source the expansions.sql into your database (current PEQ dumps will already have this data and you can skip this file or ignore any duplicate errors).

5) Rename config.php.dist as config.php.  Then, open up config.php and edit the variables according to your database and needs.

6) The default username/password for the editor is admin/password.  If you want to add a user other than the default user, you can do so via the "admin" link, by the "logout" link, after you log in.

7) Open up index.php in your web browser and have fun!

### DBSTR_US importer

1) Run file located in 'sql/dbstr_us.sql'

2) Place dbstr_us.txt file in base folder of editor. example mine is "F:\Website\peqphpeditor"

3) Edit config.php near bottom. Variable is $my_root_dbstrus = $_SERVER['DOCUMENT_ROOT'] . '/peqphpeditor';

4) Change '/peqphpeditor' to whatever you named your folder 

5) Open editor in brower and go to 'Spells' then click on 'Import dbstr_us.txt'
