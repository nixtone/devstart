<?

use Engine\Cms;
use Engine\DI\DI;

try(
	// Dependency injection
	$di = new DI();

	$cms = new Cms($di);
	$cms->run();

) catch(\ErrorException $e) {
	echo $e->getMessage();
}
