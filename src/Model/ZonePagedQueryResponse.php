<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZonePagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return ZoneCollection
     */
    public function getResults(): ZoneCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, ZoneCollection::class);
            } else {
                return Mapper::map([], ZoneCollection::class);
            }
        }
        return $this->results;
    }
                
}
