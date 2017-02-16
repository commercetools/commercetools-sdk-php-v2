<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StatePagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return StateCollection
     */
    public function getResults(): StateCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, StateCollection::class);
            } else {
                return Mapper::map([], StateCollection::class);
            }
        }
        return $this->results;
    }
                
}
