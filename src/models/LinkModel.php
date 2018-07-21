<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model;

class LinkModel extends Model {
	public $id;
	public $type;
	public $band_id;
	public $venue_id;
	public $fest_id;
	public $url;
	public $created_time;

	public function initialize() {
		$this->setSource('link');

		$this->belongsTo(
			'fest_id',
			'FestModel',
			'id',
			[
				'alias' => 'Fest'
			]
		);

		$this->belongsTo(
			'venue_id',
			'VenueModel',
			'id',
			[
				'alias' => 'Venue'
			]
		);

		$this->belongsTo(
			'band_id',
			'BandModel',
			'id',
			[
				'alias' => 'Band'
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
			'url' => $this->url,
			'created_time' => date('c', strtotime($this->created_time))
		];

		return $obj;
	}
}