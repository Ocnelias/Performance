<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reservation`.
 */
class m170207_142151_create_performance_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('performance', [
            'id' => $this->primaryKey(),
			'performance_title' => $this->string(255)->notNull(),
			'performance_date' => $this->dateTime()->notNull(),
			'performance_duration' => $this->integer()->notNull(),
			'performance_price' => $this->money()->notNull(),  
            'performance_description' => $this->text()->notNull(),
			
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
			
            'artist_id' => $this->integer(),
            'place_id' => $this->integer(),
        ]);

		
		$this->createIndex('FK_place_id', '{{%performance}}', 'place_id');
        $this->addForeignKey(
                'FK_place_id', '{{%performance}}', 'place_id', '{{%place}}', 'id', 'SET NULL', 'CASCADE'
        );
		
		
		
        $this->createIndex('FK_artist_id', '{{%performance}}', 'artist_id');
        $this->addForeignKey(
                'FK_artist_id', '{{%performance}}', 'artist_id', '{{%artist}}', 'id', 'SET NULL', 'CASCADE'
        );
        
       	 $this->insert('performance',array(
    'performance_title'=>'Concert1',
    'performance_date' =>'2017-04-10',
    'performance_duration' => '3',
	'performance_price' => '2500',
	'performance_description' => 'big concert in our city',
	'artist_id' => '2',
	'place_id' => '2',
	 
  )); 
      
      	 $this->insert('performance',array(
    'performance_title'=>'Tourne',
    'performance_date' =>'2017-04-15',
    'performance_duration' => '2',
	'performance_price' => '500',
	'performance_description' => 'tourne from big star in our city',
	'artist_id' => '3',
	'place_id' => '1',
  )); 
      

      	 $this->insert('performance',array(
    'performance_title'=>'Perform',
    'performance_date' =>'2017-04-11',
    'performance_duration' => '2',
	'performance_price' => '1250',
	'performance_description' => 'artist performance in our city',
	'artist_id' => '1',
	'place_id' => '3',
  )); 
      	  
        
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('performance');
    }
}


      