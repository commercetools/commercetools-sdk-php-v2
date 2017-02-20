<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventoryPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return InventoryCollection
     */
    public function getResults(): InventoryCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, InventoryCollection::class);
            } else {
                return Mapper::map([], InventoryCollection::class);
            }
        }
        return $this->results;
    }
                
}
