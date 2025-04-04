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
use stdClass;

/**
 * @implements Builder<OrderSearchLongRangeValue>
 */
final class OrderSearchLongRangeValueBuilder implements Builder
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

     * @var ?int
     */
    private $gte;

    /**

     * @var ?int
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
     * <p>Possible values for the <code>customType</code> property on <a href="/../api/projects/order-search#simple-expressions">simple expressions</a> indicating the data type of the <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**

     * @return null|int
     */
    public function getGte()
    {
        return $this->gte;
    }

    /**

     * @return null|int
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
     * @param ?int $gte
     * @return $this
     */
    public function withGte(?int $gte)
    {
        $this->gte = $gte;

        return $this;
    }

    /**
     * @param ?int $lte
     * @return $this
     */
    public function withLte(?int $lte)
    {
        $this->lte = $lte;

        return $this;
    }


    public function build(): OrderSearchLongRangeValue
    {
        return new OrderSearchLongRangeValueModel(
            $this->field,
            $this->boost,
            $this->customType,
            $this->gte,
            $this->lte
        );
    }

    public static function of(): OrderSearchLongRangeValueBuilder
    {
        return new self();
    }
}
