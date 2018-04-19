<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\PagedQueryResponseCollection;


interface SubscriptionPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return SubscriptionPagedQueryResponse
     */
    public function at($index);

    /**
     * @return SubscriptionPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionPagedQueryResponse
     */
    public function map($data, $index);
}
