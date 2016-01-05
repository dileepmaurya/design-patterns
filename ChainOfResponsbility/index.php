<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Chain of responsbility handler
 */
abstract class Handler {
	protected $successor = null;

	public function append(Handler $handler) {

		if (is_null($this->successor)) {
			$this->successor = $handler;
		} else {
			$this->successor->append($handler);
		}
	}

	public function handle() {
		echo get_called_class();
		echo "<br/>";
		$processed = $this->processRequest();

		if (!$processed) {
			if (!is_null($this->successor)) {
				$processed = $this->successor->handle();
			}
		}

		return $processed;
	}

	abstract protected function processRequest();
}

class Light extends Handler {
	protected function processRequest() {
		echo "Light check processing" . "<br/>";
		return false;
	}
}

class Lock extends Handler {
	protected function processRequest() {
		echo "Lock check processing" . "<br/>";
		return false;
	}
}

class Alarm extends Handler {
	protected function processRequest() {
		echo "Alarm check processing" . "<br/>";
		return true;
	}
}

/**
 *
 */
class Request {

}

$light = new Light();
$lock = new Lock();
$alarm = new Alarm();

$light->append($lock);
$lock->append($alarm);

echo $light->handle();
