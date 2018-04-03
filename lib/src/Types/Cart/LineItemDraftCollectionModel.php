<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class LineItemDraftCollectionModel extends JsonCollection implements LineItemDraftCollection {

    /**
     * @param LineItemDraft $value
     * @return LineItemDraftCollection
     */
    public function add($value) {
        if (!$value instanceof LineItemDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return LineItemDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof LineItemDraft) {
            $data = $this->mapData(LineItemDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
