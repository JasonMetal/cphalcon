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

namespace Phalcon\Test\Unit\Events\Manager;

use UnitTester;

class GetListenersCest
{
    /**
     * Tests Phalcon\Events\Manager :: getListeners()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function eventsManagerGetListeners(UnitTester $I)
    {
        $I->wantToTest('Events\Manager - getListeners()');

        $I->skipTest('Need implementation');
    }
}
