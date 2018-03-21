<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonCollection;

class TaxRateDraftCollectionModel extends JsonCollection implements TaxRateDraftCollection {

    /**
     * @param TaxRateDraft $value
     * @return TaxRateDraftCollection
     */
    public function add($value) {
        if (!$value instanceof TaxRateDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxRateDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxRateDraft) {
            $data = $this->mapData(TaxRateDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
