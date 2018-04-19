<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface SubscriptionUpdate extends Update
{
    /**
     * @return SubscriptionUpdateActionCollection
     */
    public function getActions();

    /**
     * @param SubscriptionUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
