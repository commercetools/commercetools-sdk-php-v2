<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionUpdateActionModel;

class SubscriptionSetChangesActionModel extends SubscriptionUpdateActionModel implements SubscriptionSetChangesAction {
    const DISCRIMINATOR_VALUE = 'setChanges';

    /**
     * @var ChangeSubscriptionCollection
     */
    protected $changes;

    /**
     * @return ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        if (is_null($this->changes)) {
            $value = $this->raw(SubscriptionSetChangesAction::FIELD_CHANGES);
            if (is_null($value)) {
                return $this->mapData(ChangeSubscriptionCollection::class, null);
            }
            $value = $this->mapData(ChangeSubscriptionCollection::class, $value);
            $this->changes = $value;
        }
        return $this->changes;
    }

    /**
     * @param ChangeSubscriptionCollection $changes
     * @return $this
     */
    public function setChanges(ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

}
