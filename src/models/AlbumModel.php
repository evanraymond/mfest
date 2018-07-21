<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model,
	Phalcon\Validation,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Uniqueness,
	Phalcon\Validation\Validator\PresenceOf;

class AlbumModel extends Model {
	public $id;
	public $name;
	public $band_id;
	public $released;
	public $cover;
	public $created_time;

	public function initialize() {
		$this->setSource('album');

		$this->hasMany(
			'id',
			'LinkModel',
			'album_id',
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
			'band_id' => $this->band_id,
			'released' => $this->released,
			'cover' => $this->cover,
			'created_time' => date('c', strtotime($this->created_time))
		];

		return $obj;
	}
}