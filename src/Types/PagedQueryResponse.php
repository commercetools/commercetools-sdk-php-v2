<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\ResourceCollection;
use Commercetools\Types\Common\Resource;

interface PagedQueryResponse extends JsonObject {
    const FIELD_COUNT = 'count';
    const FIELD_TOTAL = 'total';
    const FIELD_OFFSET = 'offset';
    const FIELD_RESULTS = 'results';

    /**
     * @return int
     */
    public function getCount();

    /**
     * @return int
     */
    public function getTotal();

    /**
     * @return int
     */
    public function getOffset();

    /**
     * @return ResourceCollection
     */
    public function getResults();

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count);

    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total);

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset(int $offset);

    /**
     * @param ResourceCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

}
