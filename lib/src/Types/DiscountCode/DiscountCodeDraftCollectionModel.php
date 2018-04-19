<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeDraftCollectionModel extends JsonCollection implements DiscountCodeDraftCollection
{

    /**
     * @param DiscountCodeDraft $value
     * @return DiscountCodeDraftCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeDraft) {
            $data = $this->mapData(DiscountCodeDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
