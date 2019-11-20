<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRemoveVariantAction>
 */
final class ProductRemoveVariantActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?int
     */
    private $id;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    public function build(): ProductRemoveVariantAction
    {
        return new ProductRemoveVariantActionModel(
            $this->staged,
            $this->id,
            $this->sku
        );
    }

    public static function of(): ProductRemoveVariantActionBuilder
    {
        return new self();
    }
}
