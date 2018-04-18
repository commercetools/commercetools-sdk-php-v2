<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class MyOrderFromCartDraftCollectionModel extends JsonCollection implements MyOrderFromCartDraftCollection {

    /**
     * @param MyOrderFromCartDraft $value
     * @return MyOrderFromCartDraftCollection
     */
    public function add($value) {
        if (!$value instanceof MyOrderFromCartDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MyOrderFromCartDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MyOrderFromCartDraft) {
            $data = $this->mapData(MyOrderFromCartDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
