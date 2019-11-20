<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartAddDiscountCodeAction>
 */
final class CartAddDiscountCodeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    public function build(): CartAddDiscountCodeAction
    {
        return new CartAddDiscountCodeActionModel(
            $this->code
        );
    }

    public static function of(): CartAddDiscountCodeActionBuilder
    {
        return new self();
    }
}
