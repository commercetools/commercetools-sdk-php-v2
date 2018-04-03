<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class SubscriptionPagedQueryResponseModel extends PagedQueryResponseModel implements SubscriptionPagedQueryResponse {
    /**
     * @var SubscriptionCollection
     */
    protected $results;

    /**
     * @return SubscriptionCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(SubscriptionPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(SubscriptionCollection::class, null);
            }
            $value = $this->mapData(SubscriptionCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param SubscriptionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof SubscriptionCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
