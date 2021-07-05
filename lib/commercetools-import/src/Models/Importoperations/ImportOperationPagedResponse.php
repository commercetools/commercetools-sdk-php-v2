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
    public const FIELD_TOTAL = 'total';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>The number of results requested in the query request.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The number of elements skipped, not a page number.
     * Supplied by the client or the server default.</p>
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * <p>The actual number of results returned.</p>
     *
     * @return null|int
     */
    public function getCount();

    /**
     * <p>The total number of import operations matching the query.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>The array of Import Operations matching the query.</p>
     *
     * @return null|ImportOperationCollection
     */
    public function getResults();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?ImportOperationCollection $results
     */
    public function setResults(?ImportOperationCollection $results): void;
}
