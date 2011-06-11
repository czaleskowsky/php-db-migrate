<?php

/**
 * Integer columns
 */
class Ddl_Mysql_Integer extends Ddl_Mysql_Base
{
    protected $mysql_types = array(
        'small'  => 'tinyint',
        'medium' => 'int',
        'large'  => 'bigint'
    );
}

?>