<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface SubscriptionSetChangesAction extends SubscriptionUpdateAction {
    const FIELD_CHANGES = 'changes';

    /**
     * @return ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * @param ChangeSubscriptionCollection $changes
     * @return $this
     */
    public function setChanges(ChangeSubscriptionCollection $changes);

}
