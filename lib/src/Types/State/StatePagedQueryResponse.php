<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface StatePagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return StateCollection
     */
    public function getResults();

    /**
     * @param StateCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
