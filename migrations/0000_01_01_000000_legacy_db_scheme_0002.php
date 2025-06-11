<?php

return array (
  'up' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'create_table',
        'table_name' => 'treasures',
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'varchar',
            'size' => 255,
          ),
        ),
        'constraints' => 
        array (
          0 => 
          array (
            'type' => 'unique',
            'values' => 
            array (
              0 => 'name',
            ),
          ),
        ),
      ),
    ),
  ),
  'down' => 
  array (
    'actions' => 
    array (
    ),
  ),
);
