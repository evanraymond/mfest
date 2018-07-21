<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model;

class FestVenueModel extends Model {
	public $id;
	public $fest_id;
	public $venue_id;

	public function initialize() {
		$this->setSource('fest_venue');

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

		$this->hasMany(
			'id',
			'FestVenueBandModel',
			'fest_venue_id',
			[
				'foreignKey' => true,
				'alias' => 'FestVenueBands'
			]
		);
	}
}