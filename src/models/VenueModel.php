<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model,
	Phalcon\Validation,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Uniqueness,
	Phalcon\Validation\Validator\PresenceOf;

class VenueModel extends Model {
	public $id;
	public $name;
	public $slug;
	public $city;
	public $state;
	public $created_time;

	public function initialize() {
		$this->setSource('venue');
	}

	public function beforeValidationOnCreate() {
		if (!isset($this->created_time))
			$this->created_time = date('Y-m-d H:i:s',time());
	}

	public function build() {
		$obj = [
			'id' => (int) $this->id,
			'name' => $this->name,
			'slug' => $this->slug,
			'city' => $this->city,
			'state' => $this->state,
			'created_time' => date('c', strtotime($this->created_time))
		];

		return $obj;
	}
}