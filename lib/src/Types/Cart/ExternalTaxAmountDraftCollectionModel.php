<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ExternalTaxAmountDraftCollectionModel extends JsonCollection implements ExternalTaxAmountDraftCollection {

    /**
     * @param ExternalTaxAmountDraft $value
     * @return ExternalTaxAmountDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ExternalTaxAmountDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExternalTaxAmountDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExternalTaxAmountDraft) {
            $data = $this->mapData(ExternalTaxAmountDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
