<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SubscriptionSetMessagesActionCollectionModel extends SubscriptionUpdateActionCollectionModel implements SubscriptionSetMessagesActionCollection
{

    /**
     * @param SubscriptionSetMessagesAction $value
     * @return SubscriptionSetMessagesActionCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionSetMessagesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionSetMessagesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionSetMessagesAction) {
            $data = $this->mapData(SubscriptionSetMessagesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
