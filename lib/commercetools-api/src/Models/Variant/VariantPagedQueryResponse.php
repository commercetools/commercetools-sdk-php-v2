<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantPagedQueryResponse extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>Actual number of results returned.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Total number of results matching the query.
     * This number is an estimation that is not <a href="/../api/general-concepts#strong-consistency">strongly consistent</a>.
     * This field is returned by default.
     * Unless absolutely necessary, use the query parameter <code>withTotal=false</code> to improve performance by deactivating the calculation of this field.
     * When the results are filtered with a <a href="ctp:api:type:QueryPredicate">Query Predicate</a>, <code>total</code> is subject to a <a href="/../api/limits#queries">limit</a>.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p><a href="ctp:api:type:Variant">Variants</a> matching the query.</p>
     *

     * @return null|VariantCollection
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
     * @param ?VariantCollection $results
     */
    public function setResults(?VariantCollection $results): void;
}
