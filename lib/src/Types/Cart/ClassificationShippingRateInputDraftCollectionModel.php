<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputDraftCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ClassificationShippingRateInputDraftCollectionModel extends ShippingRateInputDraftCollectionModel implements ClassificationShippingRateInputDraftCollection
{

    /**
     * @param ClassificationShippingRateInputDraft $value
     * @return ClassificationShippingRateInputDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ClassificationShippingRateInputDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ClassificationShippingRateInputDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ClassificationShippingRateInputDraft) {
            $data = $this->mapData(ClassificationShippingRateInputDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
