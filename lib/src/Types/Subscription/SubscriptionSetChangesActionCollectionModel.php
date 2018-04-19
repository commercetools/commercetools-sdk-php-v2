<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SubscriptionSetChangesActionCollectionModel extends SubscriptionUpdateActionCollectionModel implements SubscriptionSetChangesActionCollection
{

    /**
     * @param SubscriptionSetChangesAction $value
     * @return SubscriptionSetChangesActionCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionSetChangesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionSetChangesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionSetChangesAction) {
            $data = $this->mapData(SubscriptionSetChangesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
