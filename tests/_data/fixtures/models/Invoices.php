<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Models;

use Phalcon\Mvc\Model;

class Invoices extends Model
{
    public $inv_id;
    public $inv_cst_id;
    public $inv_status_flag;
    public $inv_title;
    public $inv_total;
    public $inv_created_at;

    public function initialize()
    {
        $this->setSource('co_invoices');
    }
}
