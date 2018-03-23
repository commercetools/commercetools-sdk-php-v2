<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface MessagePagedQueryResponse extends PagedQueryResponse {
    /**
     * @return MessageCollection
     */
    public function getResults();

    /**
     * @param MessageCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
