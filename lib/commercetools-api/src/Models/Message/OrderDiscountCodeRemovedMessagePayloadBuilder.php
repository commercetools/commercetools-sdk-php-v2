<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderDiscountCodeRemovedMessagePayload>
 */
final class OrderDiscountCodeRemovedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|DiscountCodeReference|DiscountCodeReferenceBuilder
     */
    private $discountCode;

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode()
    {
        return $this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode;
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
    public function withDiscountCodeBuilder(?DiscountCodeReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): OrderDiscountCodeRemovedMessagePayload
    {
        return new OrderDiscountCodeRemovedMessagePayloadModel(
            $this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode
        );
    }

    public static function of(): OrderDiscountCodeRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
