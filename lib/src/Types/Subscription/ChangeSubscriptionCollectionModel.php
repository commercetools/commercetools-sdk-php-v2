<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ChangeSubscriptionCollectionModel extends JsonCollection implements ChangeSubscriptionCollection
{

    /**
     * @param ChangeSubscription $value
     * @return ChangeSubscriptionCollection
     */
    public function add($value) {
        if (!$value instanceof ChangeSubscription) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChangeSubscription
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChangeSubscription) {
            $data = $this->mapData(ChangeSubscription::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
