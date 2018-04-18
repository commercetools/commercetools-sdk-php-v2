<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SubscriptionPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements SubscriptionPagedQueryResponseCollection {

    /**
     * @param SubscriptionPagedQueryResponse $value
     * @return SubscriptionPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionPagedQueryResponse) {
            $data = $this->mapData(SubscriptionPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
