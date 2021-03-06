<?php

class Ddl_DataType_TextTest extends PHPUnit_Framework_TestCase
{
    function test_default_text_length_is_255()
    {
        $type = new Ddl_DataType_Text();
        $this->assertEquals(255, $type->get_limit());
    }
    
    function test_set_text_length_to_other()
    {
        $type = new Ddl_DataType_Text('large');
        $this->assertEquals('large', $type->get_limit());
        $this->assertRegexp('/longtext/', (string) $type);
    }
    
    function test_set_int_limit_uses_varchar()
    {
        $type = new Ddl_DataType_Text(255);
        $this->assertRegexp('/varchar\(255\)/', (string) $type);
    }
    
    function test_int_limit_1_uses_char()
    {
        $type = new Ddl_DataType_Text(1);
        $this->assertRegexp('/^char\(1\)/', (string) $type);
    }
}

?>