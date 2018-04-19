<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface PaymentUpdate extends Update
{
    /**
     * @return PaymentUpdateActionCollection
     */
    public function getActions();

    /**
     * @param PaymentUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
