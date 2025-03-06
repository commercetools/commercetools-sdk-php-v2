<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CountOnLineItemUnits>
 */
final class CountOnLineItemUnitsBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $predicate;

    /**

     * @var ?int
     */
    private $minCount;

    /**

     * @var ?int
     */
    private $maxCount;

    /**
     * @deprecated
     * @var ?int
     */
    private $excludeCount;

    /**
     * <p>Valid <a href="/../api/projects/predicates#lineitem-field-identifiers">LineItem predicate</a> that determines the units participating in the Discount.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>Minimum number of units of a Line Item that match the predicate.</p>
     *

     * @return null|int
     */
    public function getMinCount()
    {
        return $this->minCount;
    }

    /**
     * <p>Maximum number of units of a Line Item that match the predicate.
     * There might be more units matching the predicate, but they will not be participating to the resulting set.</p>
     * <p>The value must be greater than or equal to <code>minCount</code>.
     * If not provided, the component will match all units that satisfy the predicate.</p>
     *

     * @return null|int
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * <p>Number of units of a Line Item to exclude on every application of the Discount.</p>
     * <p>Set only when configuring the <code>targetPattern</code>.</p>
     * <p>The units matched first (satisfying the pattern component) will be excluded from the resulting set.
     * The <code>minCount</code>and <code>maxCount</code> are considered only after the exclusion. Pattern components are matched only if any further units satisfying the pattern component exist.
     * For example, if 5 jeans are required but only 3 should be discounted, the <code>excludeCount</code> value must be 2.</p>
     *
     * @deprecated
     * @return null|int
     */
    public function getExcludeCount()
    {
        return $this->excludeCount;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    /**
     * @param ?int $minCount
     * @return $this
     */
    public function withMinCount(?int $minCount)
    {
        $this->minCount = $minCount;

        return $this;
    }

    /**
     * @param ?int $maxCount
     * @return $this
     */
    public function withMaxCount(?int $maxCount)
    {
        $this->maxCount = $maxCount;

        return $this;
    }

    /**
     * @param ?int $excludeCount
     * @return $this
     */
    public function withExcludeCount(?int $excludeCount)
    {
        $this->excludeCount = $excludeCount;

        return $this;
    }


    public function build(): CountOnLineItemUnits
    {
        return new CountOnLineItemUnitsModel(
            $this->predicate,
            $this->minCount,
            $this->maxCount,
            $this->excludeCount
        );
    }

    public static function of(): CountOnLineItemUnitsBuilder
    {
        return new self();
    }
}
