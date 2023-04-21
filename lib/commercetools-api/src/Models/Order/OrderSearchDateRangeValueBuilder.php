<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderSearchDateRangeValue>
 */
final class OrderSearchDateRangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?int
     */
    private $boost;

    /**

     * @var ?string
     */
    private $customType;

    /**

     * @var ?DateTimeImmutable
     */
    private $gte;

    /**

     * @var ?DateTimeImmutable
     */
    private $lte;

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**

     * @return null|int
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**

     * @return null|string
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getGte()
    {
        return $this->gte;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getLte()
    {
        return $this->lte;
    }

    /**
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param ?int $boost
     * @return $this
     */
    public function withBoost(?int $boost)
    {
        $this->boost = $boost;

        return $this;
    }

    /**
     * @param ?string $customType
     * @return $this
     */
    public function withCustomType(?string $customType)
    {
        $this->customType = $customType;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $gte
     * @return $this
     */
    public function withGte(?DateTimeImmutable $gte)
    {
        $this->gte = $gte;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lte
     * @return $this
     */
    public function withLte(?DateTimeImmutable $lte)
    {
        $this->lte = $lte;

        return $this;
    }


    public function build(): OrderSearchDateRangeValue
    {
        return new OrderSearchDateRangeValueModel(
            $this->field,
            $this->boost,
            $this->customType,
            $this->gte,
            $this->lte
        );
    }

    public static function of(): OrderSearchDateRangeValueBuilder
    {
        return new self();
    }
}
