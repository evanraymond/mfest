<?php
use Phalcon\Mvc\Model\Message,
	Phalcon\Mvc\Model,
	Phalcon\Validation,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Uniqueness,
	Phalcon\Validation\Validator\PresenceOf;

class FestVenueBandModel extends Model {
	public $id;
	public $fest_venue_id;
	public $band_id;
	public $date;
	public $start_time;
	public $end_time;

	public function initialize() {
		$this->setSource('fest_venue_band');

		$this->belongsTo(
			'fest_venue_id',
			'FestVenueModel',
			'id',
			[
				'alias' => 'FestVenue'
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

	public function build() {
		$obj = [
			'id' => (int) $this->id,
			'name' => $this->name,
			'date' => $this->date,
			'start_time' => $this->start_time,
			'end_time' => $this->end_time
		];

		return $obj;
	}
}