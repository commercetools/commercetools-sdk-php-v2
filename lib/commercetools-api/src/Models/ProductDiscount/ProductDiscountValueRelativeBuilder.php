<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountValueRelative>
 */
final class ProductDiscountValueRelativeBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $permyriad;

    /**
     * <p>Fraction (per ten thousand) the price is reduced by. For example, <code>1000</code> will result in a 10% price reduction.</p>
     *
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


    public function build(): ProductDiscountValueRelative
    {
        return new ProductDiscountValueRelativeModel(
            $this->permyriad
        );
    }

    public static function of(): ProductDiscountValueRelativeBuilder
    {
        return new self();
    }
}
