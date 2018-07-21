<?php

use Phinx\Migration\AbstractMigration;

class FestVenueBandMigration extends AbstractMigration
{
    public function change()
    {
		$table = $this->table('fest_venue_band');
		$table->addColumn('fest_venue_id', 'integer')
            ->addColumn('band_id', 'integer')
            ->addColumn('date', 'date')
            ->addColumn('start_time', 'datetime')
            ->addColumn('end_time', 'datetime')
			->create();
    }
}
