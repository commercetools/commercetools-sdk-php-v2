<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountValueAbsoluteDraft>
 */
final class ProductDiscountValueAbsoluteDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?MoneyCollection
     */
    private $money;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMoney(?MoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }

    public function build(): ProductDiscountValueAbsoluteDraft
    {
        return new ProductDiscountValueAbsoluteDraftModel(
            $this->type,
            $this->money
        );
    }

    public static function of(): ProductDiscountValueAbsoluteDraftBuilder
    {
        return new self();
    }
}
