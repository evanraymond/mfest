<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model,
	Phalcon\Validation,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Uniqueness,
	Phalcon\Validation\Validator\PresenceOf;

class BandModel extends Model {
	public $id;
	public $name;
	public $genre_id;
	public $origin;
	public $years_active;
	public $logo;
	public $description;
	public $created_time;

	public function initialize() {
		$this->setSource('band');

		$this->hasMany(
			'id',
			'LinkModel',
			'band_id',
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
			'genre_id' => $this->genre_id,
			'origin' => $this->origin,
			'years_active' => $this->years_active,
			'logo' => $this->logo,
			'description' => $this->description,
			'created_time' => date('c', strtotime($this->created_time))
		];

		return $obj;
	}
}