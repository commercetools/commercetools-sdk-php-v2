<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypePagedQueryResponse extends PageQueryResponse {
    protected $results;

    /**
     * @return ProductTypeCollection
     */
    public function getResults(): ProductTypeCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, ProductTypeCollection::class);
            } else {
                return Mapper::map([], ProductTypeCollection::class);
            }
        }
        return $this->results;
    }
                
}
