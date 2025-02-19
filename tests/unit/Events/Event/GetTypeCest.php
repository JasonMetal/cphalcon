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

namespace Phalcon\Test\Unit\Events\Event;

use Phalcon\Events\Event;
use UnitTester;

class GetTypeCest
{
    /**
     * Tests Phalcon\Events\Event :: getType()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-20
     */
    public function eventsEventGetType(UnitTester $I)
    {
        $I->wantToTest('Events\Event - getType()');

        $type = 'some-type:beforeSome';

        $event = new Event(
            $type,
            $this,
            []
        );

        $I->assertEquals(
            $type,
            $event->getType()
        );
    }
}
