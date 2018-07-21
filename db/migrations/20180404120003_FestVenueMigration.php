<?php

use Phinx\Migration\AbstractMigration;

class FestVenueMigration extends AbstractMigration
{
    public function change()
    {
		$table = $this->table('fest_venue');
		$table->addColumn('fest_id', 'integer')
            ->addColumn('venue_id', 'integer')
			->create();
    }
}
