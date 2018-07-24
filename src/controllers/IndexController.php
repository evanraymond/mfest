<?php

class IndexController extends ControllerBase
{
    public function home()
    {
		$Fests = FestModel::find([
			'conditions' => 'start_date > :start_date:',
			'bind' => [
				'start_date' => date('Y-m-d', time())
			],
			'order' => 'start_date ASC'
		]);

		$states = [];
		foreach ($Fests as $Fest) {
			if (isset($states[$Fest->state]))
				$states[$Fest->state]++;
			else
				$states[$Fest->state] = 1;
		}
		ksort($states);

		echo $this->view->render('index', [
			'url' => $this->config->app->method . $this->config->app->public,
			'cdn' => $this->config->cdn,
			'states' => $states,
			'fests' => $Fests->toArray()
		]);
    }

    public function fest($slug)
    {
		$Fest = FestModel::findFirstBySlug($slug);

		// Get venues
		$Venues = [];
		foreach ($Fest->FestVenues as $FestVenues)
			$Venues[] = $FestVenues->Venue->toArray();


		$Bands = [];
		foreach ($Fest->FestVenues as $FestVenue)
			foreach ($FestVenue->FestVenueBands as $FestVenueBand)
				$Bands[] = $FestVenueBand->Band->toArray();

		$Schedule = [];
		if ($Fest->scheduled == 1) {
			foreach ($Fest->FestVenues as $FestVenue) {
				$venue = [
					'name' => $FestVenue->Venue->name,
					'schedule' => []
				];

				$FestVenueBands = FestVenueBandModel::find([
					'conditions' => 'fest_venue_id = :fest_venue_id:',
					'bind' => [
						'fest_venue_id' => $FestVenue->id
					],
					'order' => 'date ASC, start_time ASC'
				]);

				foreach ($FestVenueBands as $FestVenueBand) {
					$venue['schedule'][$FestVenueBand->date][] = [
						'start_time' => date('g:i', strtotime($FestVenueBand->start_time)),
						'end_time' => date('g:i', strtotime($FestVenueBand->end_time)),
						'band' => $FestVenueBand->Band->toArray()
					];
				}

				$Schedule[] = $venue;
			}
		}

		// Get links
		$Links = [];
		foreach ($Fest->Links as $Link)
			$Links[] = $Link->toArray();

		echo $this->view->render('fest/index', [
			'url' => $this->config->app->method . $this->config->app->public,
			'cdn' => $this->config->cdn,
			'fest' => $Fest->toArray(),
			'venues' => $Venues,
			'bands' => $Bands,
			'schedule' => $Schedule,
			'links' => $Links
		]);
    }

    public function band($slug)
    {
		$Band = BandModel::findFirstBySlug($slug);

		$Albums = AlbumModel::findByBandId($Band->id);

		// Get links
		$Links = [];
		foreach ($Band->Links as $Link)
			$Links[] = $Link->toArray();

		echo $this->view->render('band/index', [
			'url' => $this->config->app->method . $this->config->app->public,
			'cdn' => $this->config->cdn,
			'band' => $Band->toArray(),
			'albums' => $Albums->toArray(),
			'links' => $Links
		]);
    }

	public function news()
	{
		echo $this->view->render('news/index', [
			'url' => $this->config->app->method . $this->config->app->public,
			'cdn' => $this->config->cdn
		]);
	}

	public function about()
	{
		echo $this->view->render('about/index', [
			'url' => $this->config->app->method . $this->config->app->public,
			'cdn' => $this->config->cdn
		]);
	}
}