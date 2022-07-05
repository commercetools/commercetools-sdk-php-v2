<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeInfo>
 */
final class DiscountCodeInfoBuilder implements Builder
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
     * @param ?DiscountCodeReference $discountCode
     * @return $this
     */
    public function withDiscountCode(?DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withDiscountCode() instead
     * @return $this
     */
    public function withDiscountCodeBuilder(?DiscountCodeReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): DiscountCodeInfo
    {
        return new DiscountCodeInfoModel(
            $this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode,
            $this->state
        );
    }

    public static function of(): DiscountCodeInfoBuilder
    {
        return new self();
    }
}
