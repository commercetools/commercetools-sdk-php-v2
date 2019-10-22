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
    const FIELD_RESULTS = 'results';

    /**
     * <p>The maximum number of import items returned for a page.</p>.
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
     * <p>The actual number of results returned by this response.</p>.
     *
     * @return null|int
     */
    public function getCount();

    /**
     * <p>The results for this paged response.</p>.
     *
     * @return null|ImportItemCollection
     */
    public function getResults();

    public function setLimit(?int $limit): void;

    public function setOffset(?int $offset): void;

    public function setCount(?int $count): void;

    public function setResults(?ImportItemCollection $results): void;
}
