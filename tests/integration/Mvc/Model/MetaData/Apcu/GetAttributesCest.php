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

namespace Phalcon\Test\Integration\Mvc\Model\MetaData\Apcu;

use IntegrationTester;

/**
 * Class GetAttributesCest
 */
class GetAttributesCest
{
    /**
     * Tests Phalcon\Mvc\Model\MetaData\Apcu :: getAttributes()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelMetadataApcuGetAttributes(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\MetaData\Apcu - getAttributes()');
        $I->skipTest('Need implementation');
    }
}
