<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class MessagePagedQueryResponseModel extends PagedQueryResponseModel implements MessagePagedQueryResponse {
    /**
     * @var MessageCollection
     */
    protected $results;

    /**
     * @return MessageCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(MessagePagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(MessageCollection::class, null);
            }
            $value = $this->mapData(MessageCollection::class, $value);
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
