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
 * @implements Builder<OrderSearchQueryExpressionValue>
 */
final class OrderSearchQueryExpressionValueBuilder implements Builder
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


    public function build(): OrderSearchQueryExpressionValue
    {
        return new OrderSearchQueryExpressionValueModel(
            $this->field,
            $this->boost,
            $this->customType
        );
    }

    public static function of(): OrderSearchQueryExpressionValueBuilder
    {
        return new self();
    }
}
