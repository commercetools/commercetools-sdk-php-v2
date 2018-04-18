<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements TaxCategoryPagedQueryResponseCollection {

    /**
     * @param TaxCategoryPagedQueryResponse $value
     * @return TaxCategoryPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryPagedQueryResponse) {
            $data = $this->mapData(TaxCategoryPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
