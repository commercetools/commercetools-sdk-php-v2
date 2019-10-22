<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;

interface ChannelPagedQueryResponse extends JsonObject
{
    const FIELD_LIMIT = 'limit';
    const FIELD_COUNT = 'count';
    const FIELD_TOTAL = 'total';
    const FIELD_OFFSET = 'offset';
    const FIELD_RESULTS = 'results';

    /**
     * @return null|int
     */
    public function getLimit();

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getTotal();

    /**
     * @return null|int
     */
    public function getOffset();

    /**
     * @return null|ChannelCollection
     */
    public function getResults();

    public function setLimit(?int $limit): void;

    public function setCount(?int $count): void;

    public function setTotal(?int $total): void;

    public function setOffset(?int $offset): void;

    public function setResults(?ChannelCollection $results): void;
}
