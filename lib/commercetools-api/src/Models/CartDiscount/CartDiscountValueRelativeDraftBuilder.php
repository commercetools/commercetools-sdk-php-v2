<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountValueRelativeDraft>
 */
final class CartDiscountValueRelativeDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $permyriad;

    /**
     * @return null|int
     */
    public function getPermyriad()
    {
        return $this->permyriad;
    }

    /**
     * @return $this
     */
    public function withPermyriad(?int $permyriad)
    {
        $this->permyriad = $permyriad;

        return $this;
    }

    public function build(): CartDiscountValueRelativeDraft
    {
        return new CartDiscountValueRelativeDraftModel(
            $this->permyriad
        );
    }

    public static function of(): CartDiscountValueRelativeDraftBuilder
    {
        return new self();
    }
}
