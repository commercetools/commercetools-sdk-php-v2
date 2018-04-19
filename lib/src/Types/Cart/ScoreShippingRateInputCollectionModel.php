<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ScoreShippingRateInputCollectionModel extends ShippingRateInputCollectionModel implements ScoreShippingRateInputCollection
{

    /**
     * @param ScoreShippingRateInput $value
     * @return ScoreShippingRateInputCollection
     */
    public function add($value) {
        if (!$value instanceof ScoreShippingRateInput) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ScoreShippingRateInput
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ScoreShippingRateInput) {
            $data = $this->mapData(ScoreShippingRateInput::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
