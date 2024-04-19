# Simple PHP Trace logger

Beautifully format PHP's `debug_backtrace` so it can be used in logs

## Usage

```php
error_log( as_trace() );
```

### With opt=2

```
[19-Apr-2024 21:12:19 UTC] 
	> Stack trace: 
	/Users/asumaran/valet/wc/wp-includes/class-wpdb.php:2406: as_trace()
	/Users/asumaran/valet/wc/wp-includes/class-wpdb.php:2371: wpdb->log_query()
	/Users/asumaran/valet/wc/wp-includes/class-wpdb.php:2274: wpdb->_do_query()
	/Users/asumaran/valet/wc/wp-includes/class-wpdb.php:2630: wpdb->query()
	/Users/asumaran/valet/wc/wp-includes/class-wpdb.php:2519: wpdb->_insert_replace_helper()
	/Users/asumaran/valet/wc/wp-includes/meta.php:124: wpdb->insert()
	/Users/asumaran/valet/wc/wp-includes/meta.php:252: add_metadata()
	/Users/asumaran/valet/wc/wp-includes/user.php:1198: update_metadata()
	/Users/asumaran/Developer/woocommerce/plugins/woocommerce/includes/wc-user-functions.php:839: update_user_meta()
	/Users/asumaran/Developer/woocommerce/plugins/woocommerce/includes/wc-user-functions.php:804: wc_set_user_last_update_time()
	/Users/asumaran/valet/wc/wp-includes/class-wp-hook.php:326: wc_update_profile_last_update_time()
	/Users/asumaran/valet/wc/wp-includes/class-wp-hook.php:348: WP_Hook->apply_filters()
	/Users/asumaran/valet/wc/wp-includes/plugin.php:517: WP_Hook->do_action()
	/Users/asumaran/valet/wc/wp-includes/user.php:2489: do_action()
	/Users/asumaran/valet/wc/wp-includes/user.php:2615: wp_insert_user()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/shell-command/src/WP_CLI/Shell/REPL.php(46) : eval()'d code:1: wp_update_user()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/shell-command/src/WP_CLI/Shell/REPL.php:46: eval()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/shell-command/src/Shell_Command.php:52: WP_CLI\Shell\REPL->start()
	Shell_Command->__invoke()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/WP_CLI/Dispatcher/CommandFactory.php:100: call_user_func()
	WP_CLI\Dispatcher\CommandFactory::WP_CLI\Dispatcher\{closure}()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/WP_CLI/Dispatcher/Subcommand.php:497: call_user_func()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/WP_CLI/Runner.php:441: WP_CLI\Dispatcher\Subcommand->invoke()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/WP_CLI/Runner.php:464: WP_CLI\Runner->run_command()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/WP_CLI/Runner.php:1295: WP_CLI\Runner->run_command_and_exit()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/WP_CLI/Bootstrap/LaunchRunner.php:28: WP_CLI\Runner->start()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/bootstrap.php:83: WP_CLI\Bootstrap\LaunchRunner->process()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/wp-cli.php:32: WP_CLI\bootstrap()
	phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/php/boot-phar.php:20: include(phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/vendor/wp-cli/wp-cli/php/wp-cli.php)
	/opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp:4: include(phar:///opt/homebrew/Cellar/wp-cli/2.10.0/bin/wp/php/boot-phar.php)
```
