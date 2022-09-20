<?

namespace Engine;

class Cms {

	private $di;

	public function __construct($di) {
		$this->di = $di;
	}

	public function run() {

		$db = $this->di->get('test2');

		echo "<pre>";
		print_r($db);
		echo "</pre>";
	}

}
