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

namespace Phalcon\Test\Integration\Mvc\View\Engine\Volt\Compiler;

use IntegrationTester;

/**
 * Class GetUniquePrefixCest
 */
class GetUniquePrefixCest
{
    /**
     * Tests Phalcon\Mvc\View\Engine\Volt\Compiler :: getUniquePrefix()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcViewEngineVoltCompilerGetUniquePrefix(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View\Engine\Volt\Compiler - getUniquePrefix()');
        $I->skipTest('Need implementation');
    }
}
