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

namespace Phalcon\Test\Integration\Validation\Validator\Ip;

use IntegrationTester;
use Phalcon\Test\Fixtures\Traits\ValidationTrait;
use Phalcon\Validation\Validator\Ip;

/**
 * Class ConstructCest
 */
class ConstructCest
{
    use ValidationTrait;

    /**
     * Tests Phalcon\Validation\Validator\Ip :: __construct()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function validationValidatorIpConstruct(IntegrationTester $I)
    {
        $I->wantToTest('Validation\Validator\Ip - __construct()');

        $validator = new Ip();

        $this->checkConstruct($I, $validator);
    }
}
