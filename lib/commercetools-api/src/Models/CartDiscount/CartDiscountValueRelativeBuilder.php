<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountValueRelative>
 */
final class CartDiscountValueRelativeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?int
     */
    private $permyriad;

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
     * @return null|int
     */
    public function getPermyriad()
    {
        return $this->permyriad;
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
    public function withPermyriad(?int $permyriad)
    {
        $this->permyriad = $permyriad;

        return $this;
    }

    public function build(): CartDiscountValueRelative
    {
        return new CartDiscountValueRelativeModel(
            $this->type,
            $this->permyriad
        );
    }

    public static function of(): CartDiscountValueRelativeBuilder
    {
        return new self();
    }
}
