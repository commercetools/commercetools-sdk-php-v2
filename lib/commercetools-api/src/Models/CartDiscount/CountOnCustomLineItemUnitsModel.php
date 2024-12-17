<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CountOnCustomLineItemUnitsModel extends JsonObjectModel implements CountOnCustomLineItemUnits
{
    public const DISCRIMINATOR_VALUE = 'CountOnCustomLineItemUnits';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $predicate;

    /**
     *
     * @var ?int
     */
    protected $minCount;

    /**
     *
     * @var ?int
     */
    protected $maxCount;

    /**
     *
     * @var ?int
     */
    protected $excludeCount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $predicate = null,
        ?int $minCount = null,
        ?int $maxCount = null,
        ?int $excludeCount = null,
        ?string $type = null
    ) {
        $this->predicate = $predicate;
        $this->minCount = $minCount;
        $this->maxCount = $maxCount;
        $this->excludeCount = $excludeCount;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Valid <a href="/../api/projects/predicates#customlineitem-field-identifiers">CustomLineItem predicate</a> that determines the units participating in the Discount.</p>
     *
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * <p>Minimum number of units of a Custom Line Item that match the predicate.</p>
     *
     *
     * @return null|int
     */
    public function getMinCount()
    {
        if (is_null($this->minCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MIN_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->minCount = (int) $data;
        }

        return $this->minCount;
    }

    /**
     * <p>Maximum number of units of a Custom Line Item that match the predicate.
     * There might be more units matching the predicate, but they will not be participating to the resulting set.</p>
     * <p>The value must be greater than or equal to <code>minCount</code>.
     * If not provided, the component will match all units that satisfy the predicate.</p>
     *
     *
     * @return null|int
     */
    public function getMaxCount()
    {
        if (is_null($this->maxCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->maxCount = (int) $data;
        }

        return $this->maxCount;
    }

    /**
     * <p>Number of units of a Custom Line Item to exclude on every application of the Discount.</p>
     * <p>Set only when configuring the <code>targetPattern</code>.</p>
     * <p>The units matched first (satisfying the pattern component) will be excluded from the resulting set.
     * The <code>minCount</code>and <code>maxCount</code> are considered only after the exclusion. Pattern components are matched only if any further units satisfying the pattern component exist.
     * For example, if 5 jeans are required but only 3 should be discounted, the <code>excludeCount</code> value must be 2.</p>
     *
     *
     * @return null|int
     */
    public function getExcludeCount()
    {
        if (is_null($this->excludeCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_EXCLUDE_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->excludeCount = (int) $data;
        }

        return $this->excludeCount;
    }


    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }

    /**
     * @param ?int $minCount
     */
    public function setMinCount(?int $minCount): void
    {
        $this->minCount = $minCount;
    }

    /**
     * @param ?int $maxCount
     */
    public function setMaxCount(?int $maxCount): void
    {
        $this->maxCount = $maxCount;
    }

    /**
     * @param ?int $excludeCount
     */
    public function setExcludeCount(?int $excludeCount): void
    {
        $this->excludeCount = $excludeCount;
    }
}
