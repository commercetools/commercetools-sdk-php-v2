<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ReplicaCartDraftCollectionModel extends JsonCollection implements ReplicaCartDraftCollection {

    /**
     * @param ReplicaCartDraft $value
     * @return ReplicaCartDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ReplicaCartDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReplicaCartDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReplicaCartDraft) {
            $data = $this->mapData(ReplicaCartDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
