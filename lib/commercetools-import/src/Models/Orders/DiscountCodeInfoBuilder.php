<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\DiscountCodeKeyReference;
use Commercetools\Import\Models\Common\DiscountCodeKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<DiscountCodeInfo>
 */
final class DiscountCodeInfoBuilder implements Builder
{
    /**

     * @var null|DiscountCodeKeyReference|DiscountCodeKeyReferenceBuilder
     */
    private $discountCode;

    /**

     * @var ?string
     */
    private $state;

    /**
     * <p>References a discount code by key.</p>
     *

     * @return null|DiscountCodeKeyReference
     */
    public function getDiscountCode()
    {
        return $this->discountCode instanceof DiscountCodeKeyReferenceBuilder ? $this->discountCode->build() : $this->discountCode;
    }

    /**
     * <p>Maps to <code>DiscountCodeInfo.state</code></p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ?DiscountCodeKeyReference $discountCode
     * @return $this
     */
    public function withDiscountCode(?DiscountCodeKeyReference $discountCode)
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
    public function withDiscountCodeBuilder(?DiscountCodeKeyReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): DiscountCodeInfo
    {
        return new DiscountCodeInfoModel(
            $this->discountCode instanceof DiscountCodeKeyReferenceBuilder ? $this->discountCode->build() : $this->discountCode,
            $this->state
        );
    }

    public static function of(): DiscountCodeInfoBuilder
    {
        return new self();
    }
}
