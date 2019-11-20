<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderRemoveDiscountCodeAction>
 */
final class StagedOrderRemoveDiscountCodeActionBuilder implements Builder
{
    /**
     * @var DiscountCodeReference|?DiscountCodeReferenceBuilder
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

    public function build(): StagedOrderRemoveDiscountCodeAction
    {
        return new StagedOrderRemoveDiscountCodeActionModel(
            ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode)
        );
    }

    public static function of(): StagedOrderRemoveDiscountCodeActionBuilder
    {
        return new self();
    }
}
