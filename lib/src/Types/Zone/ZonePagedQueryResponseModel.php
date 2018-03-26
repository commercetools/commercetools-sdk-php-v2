<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ZonePagedQueryResponseModel extends PagedQueryResponseModel implements ZonePagedQueryResponse {
    /**
     * @var ZoneCollection
     */
    protected $results;

    /**
     * @return ZoneCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ZonePagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ZoneCollection::class, null);
            }
            $value = $this->mapData(ZoneCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ZoneCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ZoneCollection) {
            throw new \InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
