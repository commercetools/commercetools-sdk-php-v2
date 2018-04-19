<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ChannelPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return ChannelCollection
     */
    public function getResults();

    /**
     * @param ChannelCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
