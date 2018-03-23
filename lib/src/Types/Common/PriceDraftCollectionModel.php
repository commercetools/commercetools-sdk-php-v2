<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class PriceDraftCollectionModel extends JsonCollection implements PriceDraftCollection {

    /**
     * @param PriceDraft $value
     * @return PriceDraftCollection
     */
    public function add($value) {
        if (!$value instanceof PriceDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PriceDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PriceDraft) {
            $data = $this->mapData(PriceDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
