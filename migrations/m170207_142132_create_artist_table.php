<?php

use yii\db\Migration;

/**
 * Handles the creation of table `room`.
 */
class m170207_142132_create_artist_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('artist', [
            'id' => $this->primaryKey(),
            'artist_name' => $this->string(255)->notNull(),
			'artist_music_genre' => $this->string(255)->null(),      
		    'artist_description' => $this->text()->notNull(),
		    'imageFile' => $this->string(255)->null(),		
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

        ]);

	$this->insert('artist',array(
    'artist_name'=>'Alessandro Vitalico',
    'artist_music_genre' =>'classic',
    'artist_description' => 'tenor Alessandro wil sing for you',	
  ));
		
	
	$this->insert('artist',array(
    'artist_name'=>'Jackie George',
    'artist_music_genre' =>'rock',
    'artist_description' => 'Black rock star from USA',	
  ));
  
  	$this->insert('artist',array(
    'artist_name'=>'Anastasia Moo',
    'artist_music_genre' =>'pop',
    'artist_description' => 'The new big tourne from Anastasia. Wait in your city soon',	
  ));
  
  
  
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('artist');
    }

}
