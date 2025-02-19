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

namespace Phalcon\Test\Unit\Flash\Direct;

use UnitTester;

class GetDICest
{
    /**
     * Tests Phalcon\Flash\Direct :: getDI()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function flashDirectGetDI(UnitTester $I)
    {
        $I->wantToTest('Flash\Direct - getDI()');

        $I->skipTest('Need implementation');
    }
}
