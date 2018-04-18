<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputDraftCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ScoreShippingRateInputDraftCollectionModel extends ShippingRateInputDraftCollectionModel implements ScoreShippingRateInputDraftCollection {

    /**
     * @param ScoreShippingRateInputDraft $value
     * @return ScoreShippingRateInputDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ScoreShippingRateInputDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ScoreShippingRateInputDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ScoreShippingRateInputDraft) {
            $data = $this->mapData(ScoreShippingRateInputDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
