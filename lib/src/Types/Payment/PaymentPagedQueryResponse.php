<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface PaymentPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return PaymentCollection
     */
    public function getResults();

    /**
     * @param PaymentCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
