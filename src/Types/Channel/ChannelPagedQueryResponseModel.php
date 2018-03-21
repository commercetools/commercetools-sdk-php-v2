<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ChannelPagedQueryResponseModel extends PagedQueryResponseModel implements ChannelPagedQueryResponse {
    /**
     * @var ChannelCollection
     */
    protected $results;

    /**
     * @return ChannelCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ChannelPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ChannelCollection::class, null);
            }
            $value = $this->mapData(ChannelCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ResourceCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        $this->results = $results;

        return $this;
    }

}
