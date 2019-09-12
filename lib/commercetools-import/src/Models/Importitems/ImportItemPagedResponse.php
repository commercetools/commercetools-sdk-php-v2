<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\JsonObject;

interface ImportItemPagedResponse extends JsonObject
{
    const FIELD_LIMIT = 'limit';
    const FIELD_OFFSET = 'offset';
    const FIELD_COUNT = 'count';
    const FIELD_TOTAL = 'total';
    const FIELD_RESULTS = 'results';

    /**
     * <p>The maximun amount of impor items.</p>.
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>.
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * <p>The actual number of results returned in results.</p>.
     *
     * @return null|int
     */
    public function getCount();

    /**
     * <p>The total number of results matching the query.</p>.
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>An Array of results.</p>.
     *
     * @return null|ImportItemCollection
     */
    public function getResults();

    public function setLimit(?int $limit): void;

    public function setOffset(?int $offset): void;

    public function setCount(?int $count): void;

    public function setTotal(?int $total): void;

    public function setResults(?ImportItemCollection $results): void;
}
