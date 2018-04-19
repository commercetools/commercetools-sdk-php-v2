<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ExtensionPagedQueryResponse extends PagedQueryResponse
{
    /**
     * @return ExtensionCollection
     */
    public function getResults();

    /**
     * @param ExtensionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
