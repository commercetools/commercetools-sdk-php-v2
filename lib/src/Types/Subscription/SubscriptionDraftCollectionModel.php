<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SubscriptionDraftCollectionModel extends JsonCollection implements SubscriptionDraftCollection {

    /**
     * @param SubscriptionDraft $value
     * @return SubscriptionDraftCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionDraft) {
            $data = $this->mapData(SubscriptionDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
