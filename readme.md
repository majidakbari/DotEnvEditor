# DotEnv Editor 

## Simple editor for edit .env file content using php

### Installation with Composer
```bash
curl -s http://getcomposer.org/installer | php
php composer.phar require makbari/dot-env-editor

```

### Usage
All you need to do is to create an object of Handler class and pass it your config path.

### Example

```php
$handler = new \makbari\DotEnvEditor\handler\Handler("Path_To_Your_Config");

$handler->add(['key' => 'value']);

```
### Available methods

`overview()` - To list all .env content  
`add()` - Add new key => value to .env file  
`update()` - Update existing value in .env file  
`getDetails()` - List all .env file content in json format  
`createBackup()` - Create a backup from .env file  
`deleteBackup()` - Delete an existing backup  
`restore()` - Restore backup  
`delete()` - Delete an existing key => value from .env file 
