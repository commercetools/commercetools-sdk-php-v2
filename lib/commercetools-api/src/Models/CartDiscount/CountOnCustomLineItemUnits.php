<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CountOnCustomLineItemUnits extends PatternComponent
{
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_MIN_COUNT = 'minCount';
    public const FIELD_MAX_COUNT = 'maxCount';
    public const FIELD_EXCLUDE_COUNT = 'excludeCount';

    /**
     * <p>Valid <a href="/../api/projects/predicates#customlineitem-field-identifiers">CustomLineItem predicate</a> that determines the units participating in the Discount.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Minimum number of units of a Custom Line Item that match the predicate.</p>
     *

     * @return null|int
     */
    public function getMinCount();

    /**
     * <p>Maximum number of units of a Custom Line Item that match the predicate.
     * There might be more units matching the predicate, but they will not be participating to the resulting set.</p>
     * <p>The value must be greater than or equal to <code>minCount</code>.
     * If not provided, the component will match all units that satisfy the predicate.</p>
     *

     * @return null|int
     */
    public function getMaxCount();

    /**
     * <p>Number of units of a Custom Line Item to exclude on every application of the Discount.</p>
     * <p>Set only when configuring the <code>targetPattern</code>.</p>
     * <p>The units matched first (satisfying the pattern component) will be excluded from the resulting set.
     * The <code>minCount</code>and <code>maxCount</code> are considered only after the exclusion. Pattern components are matched only if any further units satisfying the pattern component exist.
     * For example, if 5 jeans are required but only 3 should be discounted, the <code>excludeCount</code> value must be 2.</p>
     *
     * @deprecated
     * @return null|int
     */
    public function getExcludeCount();

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?int $minCount
     */
    public function setMinCount(?int $minCount): void;

    /**
     * @param ?int $maxCount
     */
    public function setMaxCount(?int $maxCount): void;

    /**
     * @param ?int $excludeCount
     */
    public function setExcludeCount(?int $excludeCount): void;
}
