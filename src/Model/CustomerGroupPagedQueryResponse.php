<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerGroupPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return CustomerGroupCollection
     */
    public function getResults(): CustomerGroupCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, CustomerGroupCollection::class);
            } else {
                return Mapper::map([], CustomerGroupCollection::class);
            }
        }
        return $this->results;
    }
                
}
