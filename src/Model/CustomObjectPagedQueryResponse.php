<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomObjectPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return CustomObjectCollection
     */
    public function getResults(): CustomObjectCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, CustomObjectCollection::class);
            } else {
                return Mapper::map([], CustomObjectCollection::class);
            }
        }
        return $this->results;
    }
                
}
