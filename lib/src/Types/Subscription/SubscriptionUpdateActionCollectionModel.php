<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SubscriptionUpdateActionCollectionModel extends UpdateActionCollectionModel implements SubscriptionUpdateActionCollection
{

    /**
     * @param SubscriptionUpdateAction $value
     * @return SubscriptionUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(SubscriptionUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
