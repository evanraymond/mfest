<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model,
	Phalcon\Validation,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Uniqueness,
	Phalcon\Validation\Validator\PresenceOf;

class FestModel extends Model {
	public $id;
	public $name;
	public $slug;
	public $logo;
	public $start_date;
	public $end_date;
	public $city;
	public $state;
	public $created_time;

	public function initialize() {
		$this->setSource('fest');

		$this->hasMany(
			'id',
			'FestVenueModel',
			'fest_id',
			[
				'foreignKey' => true,
				'alias' => 'FestVenues'
			]
		);

		$this->hasMany(
			'id',
			'LinkModel',
			'fest_id',
			[
				'foreignKey' => true,
				'alias' => 'Links'
			]
		);
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
			'logo' => $this->logo,
			'start_date' => $this->start_date,
			'end_date' => $this->end_date,
			'city' => $this->city,
			'state' => $this->state,
			'created_time' => date('c', strtotime($this->created_time))
		];

		return $obj;
	}
}