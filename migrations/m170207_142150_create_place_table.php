<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reservation`.
 */
class m170207_142150_create_place_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey(),

			'place_city' => $this->string()->notNull(),
			'place_title' => $this->string()->notNull(),
			'place_capacity' => $this->integer()->null(),
						
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
			

        ]);

   $this->insert('place',array(
    'place_city'=>'London',
    'place_title' =>'London hall',
    'place_capacity' => '10000',
	
  ));
		
	 $this->insert('place',array(
    'place_city'=>'Manchester',
    'place_title' =>'Manchester stadium',
    'place_capacity' => '40000',
	
  ));

  	 $this->insert('place',array(
    'place_city'=>'Liverpool',
    'place_title' =>'Liverpool pub "Pub" ',
    'place_capacity' => '1200',
	
  ));

        
        
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('place');
    }
}
