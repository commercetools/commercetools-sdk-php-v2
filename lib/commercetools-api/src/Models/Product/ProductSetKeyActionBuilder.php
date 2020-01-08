<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductSetKeyAction>
 */
final class ProductSetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * <p>User-specific unique identifier for the product.
     * If left blank or set to <code>null</code>, the product key is unset/removed.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ProductSetKeyAction
    {
        return new ProductSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): ProductSetKeyActionBuilder
    {
        return new self();
    }
}
