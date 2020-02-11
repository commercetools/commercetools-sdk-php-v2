<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;

/**
 * @implements Builder<OrderDiscountCodeStateSetMessagePayload>
 */
final class OrderDiscountCodeStateSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|DiscountCodeReference|DiscountCodeReferenceBuilder
     */
    private $discountCode;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $oldState;

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode()
    {
        return $this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getOldState()
    {
        return $this->oldState;
    }

    /**
     * @return $this
     */
    public function withDiscountCode(?DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldState(?string $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountCodeBuilder(?DiscountCodeReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): OrderDiscountCodeStateSetMessagePayload
    {
        return new OrderDiscountCodeStateSetMessagePayloadModel(
            $this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode,
            $this->state,
            $this->oldState
        );
    }

    public static function of(): OrderDiscountCodeStateSetMessagePayloadBuilder
    {
        return new self();
    }
}
