### For any change/addition in code
* Sanity test: Load `/adminer` route, verify tables, change some data etc.

### To update Adminer
* Download new adminer file
* Prefix `adm_` to `view()`, `cookie()` and `redirect()` functions. Preferably use your IDE to do it safely.
* Update adminer-with-plugins.php with the new adminer filename

### To add a plugin
* Add the required plugin inside `src/plugins/` directory
* Add an entry for the plugin in `$plugins` array in `src/adminer-with-plugins.php` file:
```php
    $plugins = [
        // specify enabled plugins here
        new AdminerTablesFilter,
    ];
```
