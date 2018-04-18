<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SubscriptionSetKeyActionCollectionModel extends SubscriptionUpdateActionCollectionModel implements SubscriptionSetKeyActionCollection {

    /**
     * @param SubscriptionSetKeyAction $value
     * @return SubscriptionSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionSetKeyAction) {
            $data = $this->mapData(SubscriptionSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
