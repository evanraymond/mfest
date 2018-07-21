<?php

use Phinx\Migration\AbstractMigration;

class LinkMigration extends AbstractMigration
{
    public function change()
    {
		$table = $this->table('link');
		$table->addColumn('type', 'string')
			->addColumn('url', 'string')
            ->addColumn('name', 'string')
            ->addColumn('band_id', 'integer')
            ->addColumn('venue_id', 'integer')
            ->addColumn('fest_id', 'integer')
            ->addColumn('album_id', 'integer')
			->create();
    }
}
