<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class TaxCategoryPagedQueryResponseModel extends PagedQueryResponseModel implements TaxCategoryPagedQueryResponse {
    /**
     * @var TaxCategoryCollection
     */
    protected $results;

    /**
     * @return TaxCategoryCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(TaxCategoryPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryCollection::class, null);
            }
            $value = $this->mapData(TaxCategoryCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param TaxCategoryCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof TaxCategoryCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
