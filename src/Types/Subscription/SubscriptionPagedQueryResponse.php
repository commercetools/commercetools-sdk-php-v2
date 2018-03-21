<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface SubscriptionPagedQueryResponse extends PagedQueryResponse {
    /**
     * @return SubscriptionCollection
     */
    public function getResults();

    /**
     * @param SubscriptionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
