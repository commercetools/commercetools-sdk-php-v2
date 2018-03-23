<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ZonePagedQueryResponse extends PagedQueryResponse {
    /**
     * @return ZoneCollection
     */
    public function getResults();

    /**
     * @param ZoneCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
