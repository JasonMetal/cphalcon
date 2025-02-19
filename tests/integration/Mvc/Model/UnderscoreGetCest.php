<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Model;

use IntegrationTester;
use Phalcon\Test\Fixtures\Traits\DiTrait;
use Phalcon\Test\Models;

class UnderscoreGetCest
{
    use DiTrait;

    public function _before(IntegrationTester $I)
    {
        $this->setNewFactoryDefault();
        $this->setDiMysql();
    }

    public function _after(IntegrationTester $I)
    {
        $this->container['db']->close();
    }

    /**
     * Tests Phalcon\Mvc\Model :: __get()
     *
     * @author Balázs Németh <https://github.com/zsilbi>
     * @since  2019-05-07
     */
    public function mvcModelUnderscoreGet(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model - __get()');

        $user = new Models\Users();

        $user->id = 999;
        $user->name = 'Test';

        $I->assertEquals(
            999,
            $user->id
        );

        $I->assertEquals(
            'Test',
            $user->name
        );
    }

    /**
     * Tests Phalcon\Mvc\Model :: __get() whether it is using getters correctly
     *
     * @author Balázs Németh <https://github.com/zsilbi>
     * @since  2019-05-07
     */
    public function mvcModelUnderscoreGetIsUsingGetters(IntegrationTester $I)
    {
        $I->wantToTest("Mvc\Model - __get() whether it is using getters correctly");

        $model = new Models\Select();
        $model->setId(123);

        $I->assertEquals(
            123,
            $model->id
        );

        $associativeArray = [
            'firstName' => 'First name',
            'lastName'  => 'Last name',
        ];

        $model->setName($associativeArray);

        $I->assertEquals(
            $associativeArray,
            $model->name
        );

        $model->setText('MyText');

        $I->assertEquals(
            'MyText',
            $model->text
        );
    }

    /**
     * Tests Phalcon\Mvc\Model :: __get() related records
     *
     * @author Balázs Németh <https://github.com/zsilbi>
     * @since  2019-05-07
     */
    public function mvcModelUnderscoreGetRelated(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model - __get() related records');

        /**
         * Belongs-to relationship
         */
        $robotPart = Models\RobotsParts::findFirst();

        $part = $robotPart->part;

        $I->assertInstanceOf(
            Models\Parts::class,
            $part
        );

        /**
         * Testing has-one relationship
         */
        $customer = Models\Customers::findFirst();

        $user = $customer->user;

        $I->assertInstanceOf(
            Models\Users::class,
            $user
        );

        /**
         * Has-many relationship
         */
        $robot = Models\Robots::findFirst();

        $robotParts = $robot->robotsParts;

        $I->assertInstanceOf(
            \Phalcon\Mvc\Model\Resultset\Simple::class,
            $robotParts
        );
    }

    /**
     * Tests Phalcon\Mvc\Model :: __get() dirty related records
     *
     * @author Balázs Németh <https://github.com/zsilbi>
     * @since  2019-05-07
     */
    public function mvcModelUnderscoreGetDirtyRelated(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model - __get() dirty related records');

        $robot = Models\Robots::findFirst();

        /**
         * Fill up the related cache with data
         */
        $robotsParts = $robot->robotsParts;

        $I->assertInstanceOf(
            \Phalcon\Mvc\Model\Resultset\Simple::class,
            $robotsParts
        );

        /**
         * Add new related records
         */
        $robot->robotsParts = [
            new Models\RobotsParts(),
            new Models\RobotsParts(),
        ];

        /**
         * Test if the new records were returned
         */
        $dirtyRobotsParts = $robot->robotsParts;

        $I->assertInternalType(
            'array',
            $dirtyRobotsParts
        );

        $I->assertCount(
            2,
            $dirtyRobotsParts
        );

        $I->assertInstanceOf(
            Models\RobotsParts::class,
            $dirtyRobotsParts[0]
        );
    }
}
