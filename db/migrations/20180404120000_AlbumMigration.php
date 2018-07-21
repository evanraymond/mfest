<?php

use Phinx\Migration\AbstractMigration;

class AlbumMigration extends AbstractMigration
{
    public function change()
	{
		$table = $this->table('album');
		$table->addColumn('name', 'string')
            ->addColumn('band_id', 'integer')
            ->addColumn('released', 'date')
			->addColumn('cover', 'string')
			->addColumn('created_time', 'datetime')
			->create();
    }
}