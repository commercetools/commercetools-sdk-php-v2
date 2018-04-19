<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SubscriptionUpdateCollectionModel extends UpdateCollectionModel implements SubscriptionUpdateCollection
{

    /**
     * @param SubscriptionUpdate $value
     * @return SubscriptionUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionUpdate) {
            $data = $this->mapData(SubscriptionUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
