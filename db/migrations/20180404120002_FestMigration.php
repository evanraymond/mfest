<?php

use Phinx\Migration\AbstractMigration;

class FestMigration extends AbstractMigration
{
    public function change()
    {
		$table = $this->table('fest');
		$table->addColumn('name', 'string')
			->addColumn('slug', 'string')
			->addColumn('logo', 'string')
            ->addColumn('start_date', 'date')
            ->addColumn('end_date', 'date')
            ->addColumn('scheduled', 'boolean')
            ->addColumn('city', 'string')
            ->addColumn('state', 'string')
			->addColumn('created_time', 'datetime')
			->create();
    }
}
