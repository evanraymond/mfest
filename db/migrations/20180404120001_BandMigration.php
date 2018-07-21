<?php

use Phinx\Migration\AbstractMigration;

class BandMigration extends AbstractMigration
{
    public function change()
    {
		$table = $this->table('band');
		$table->addColumn('name', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('genre_id', 'integer')
            ->addColumn('origin', 'string')
            ->addColumn('years_active', 'string')
            ->addColumn('logo', 'string')
            ->addColumn('description', 'text')
			->addColumn('created_time', 'datetime')
			->create();
    }
}
