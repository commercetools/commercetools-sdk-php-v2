<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodDraftCollectionModel extends JsonCollection implements ShippingMethodDraftCollection {

    /**
     * @param ShippingMethodDraft $value
     * @return ShippingMethodDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodDraft) {
            $data = $this->mapData(ShippingMethodDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
