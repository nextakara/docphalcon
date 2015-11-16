<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PageCacheMigration_100
 */
class PageCacheMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('page_cache', array(
                'columns' => array(
                    new Column(
                        'id',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'first' => true
                        )
                    ),
                    new Column(
                        'cache',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'id'
                        )
                    ),
                    new Column(
                        'last_update',
                        array(
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => 'CURRENT_TIMESTAMP',
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cache'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id'))
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_general_ci'
                ),
            )
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
