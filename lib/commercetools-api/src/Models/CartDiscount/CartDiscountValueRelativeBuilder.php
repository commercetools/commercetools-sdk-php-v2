<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountValueRelative>
 */
final class CartDiscountValueRelativeBuilder implements Builder
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
     * @param ?int $permyriad
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
            $this->permyriad
        );
    }

    public static function of(): CartDiscountValueRelativeBuilder
    {
        return new self();
    }
}
