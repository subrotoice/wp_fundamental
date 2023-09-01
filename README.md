# wp_fundamental
## All Basic needed file for wordpress Codestar Framework

### Codestar Framework Installation [https://github.com/Codestar/codestar-framework]
```php
Keep all files in theme folder
// in function.php
require_once dirname( __FILE__ ) .'/cs-frameworkn/cs-framework.php';
require_once dirname( __FILE__ ) .'/cs-frameworkn/admin-options.php';

// To Show data
$options = get_option( 'my_framework' ); // unique id of the framework
echo $options['onBannerText']; // id of the field
```
