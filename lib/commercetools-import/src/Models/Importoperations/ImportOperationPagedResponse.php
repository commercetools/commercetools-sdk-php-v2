<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportOperationPagedResponse extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_COUNT = 'count';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>The maximum number of import operations returned for a page.</p>
     *
     * @return null|float
     */
    public function getLimit();

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>
     *
     * @return null|float
     */
    public function getOffset();

    /**
     * <p>The actual number of results returned by this response.</p>
     *
     * @return null|float
     */
    public function getCount();

    /**
     * <p>The results for this paged response.</p>
     *
     * @return null|ImportOperationCollection
     */
    public function getResults();

    public function setLimit(?float $limit): void;

    public function setOffset(?float $offset): void;

    public function setCount(?float $count): void;

    public function setResults(?ImportOperationCollection $results): void;
}
