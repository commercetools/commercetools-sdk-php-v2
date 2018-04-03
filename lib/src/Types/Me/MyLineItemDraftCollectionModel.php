<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class MyLineItemDraftCollectionModel extends JsonCollection implements MyLineItemDraftCollection {

    /**
     * @param MyLineItemDraft $value
     * @return MyLineItemDraftCollection
     */
    public function add($value) {
        if (!$value instanceof MyLineItemDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MyLineItemDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MyLineItemDraft) {
            $data = $this->mapData(MyLineItemDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
