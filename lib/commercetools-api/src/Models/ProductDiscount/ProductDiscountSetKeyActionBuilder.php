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
 * @implements Builder<ProductDiscountSetKeyAction>
 */
final class ProductDiscountSetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * <p>The key to set.
     * If you provide a <code>null</code> value or do not set this field at all, the existing <code>key</code> field is removed.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ProductDiscountSetKeyAction
    {
        return new ProductDiscountSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): ProductDiscountSetKeyActionBuilder
    {
        return new self();
    }
}
