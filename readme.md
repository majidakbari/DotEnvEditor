# DotEnv Editor 

## Simple editor for edit .env file content using php

##### All you need to do is to create an object of Handler class and pass it your config path.
##### Now you can use its methods

##### Example

```php
$handler = new \makbari\DotEnvEditor\handler\Handler("Path_To_Your_Config");

$handler->add(['key' => 'value']);

```
##### Available methods

`overview()` - To list all .env content  
`add()` - Add new key => value to .env file  
`update()` - Update existing value in .env file  
`getDetails()` - List all .env file content in json format  
`createBackup()` - Create a backup from .env file  
`deleteBackup()` - Delete an existing backup  
`restore()` - Restore backup  
`delete()` - Delete an existing key => value from .env file 
