<?php

use Phinx\Migration\AbstractMigration;

class VenueMigration extends AbstractMigration
{
    public function change()
    {
		$table = $this->table('venue');
		$table->addColumn('name', 'string')
			->addColumn('slug', 'string')
            ->addColumn('city', 'string')
            ->addColumn('state', 'string')
			->addColumn('created_time', 'datetime')
			->create();
    }
}
