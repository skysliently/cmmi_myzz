<?php
// echo "1";
Class BlogRelationModel extends RelationModel{

	Protected $tableName = 'blog';

	Protected $_link = array(
			'attr' =>array(
					'mapping_type' => MANY_TO_MANY,
					'mapping_name' => 'attr',
					'foreign_key' => 'bid',
					'relation_foreign_key' => 'aid',
					'relation_table' => 'cmmi_blog_attr'
				),
			'cate' => array(
					'mapping_type' => BELONGS_TO,
					'foreign_key' => 'cid',
					'mapping_fields' => 'name',
					'as_fields' => 'name:cate'
				),
			'visitor' =>array(
					'mapping_type' => BELONGS_TO,
					'foreign_key' => 'vid',
					'mapping_fields' => 'name',
					'as_fields' => 'name:visitor'
				)
		); 
}
?>