<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryPagedQueryResponse extends PageQueryResponse {
    protected $results;

    /**
     * @return CategoryCollection
     */
    public function getResults(): CategoryCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, CategoryCollection::class);
            } else {
                return Mapper::map([], CategoryCollection::class);
            }
        }
        return $this->results;
    }
                
}
