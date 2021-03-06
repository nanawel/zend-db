<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\Sql\Platform\Sqlite;

use Zend\Db\Sql\Platform\Sqlite\Sqlite;

class SqliteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @testdox unit test / object test: Test Sqlite constructor will register the decorator
     * @covers Zend\Db\Sql\Platform\Sqlite\Sqlite::__construct
     */
    public function testConstructorRegistersSqliteDecorator()
    {
        $mysql = new Sqlite;
        $decorators = $mysql->getDecorators();

        list($type, $decorator) = each($decorators);
        $this->assertEquals('Zend\Db\Sql\Select', $type);
        $this->assertInstanceOf('Zend\Db\Sql\Platform\Sqlite\SelectDecorator', $decorator);
    }
}
