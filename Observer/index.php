<?php
//Publisher (Pub)
interface Subject {
	public function attach(Observer $observer, $name);
	public function deAttach($name);
	public function notify();
}

//Subscriber (Sub)
interface Observer {
	public function handle();
}

class Login implements Subject {

	protected $observers = [];

	public function attach(Observer $observer, $name) {
		if (!isset($this->observer[$name])) {
			$this->observers[$name] = $observer;
		}
	}

	public function deAttach($name) {
		if (isset($this->observer[$name])) {
			unset($this->observer[$name]);
		}
	}

	public function notify() {
		foreach ($this->observers as $observer) {
			$observer->handle();
		}
	}

	public function fire() {
		$this->notify();
	}
}

/**
 *
 */
class SentMail implements Observer {
	public function handle() {
		var_dump("Sent mail handler");
	}
}

class LogHandler implements Observer {
	public function handle() {
		var_dump("log handler");
	}
}

$login = new Login();
$login->attach(new SentMail(), 'sent-mail');
$login->attach(new LogHandler(), 'log-handler');
$login->fire();
