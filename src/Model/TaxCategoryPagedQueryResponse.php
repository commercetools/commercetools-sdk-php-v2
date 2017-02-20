<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return TaxCategoryCollection
     */
    public function getResults(): TaxCategoryCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, TaxCategoryCollection::class);
            } else {
                return Mapper::map([], TaxCategoryCollection::class);
            }
        }
        return $this->results;
    }
                
}
