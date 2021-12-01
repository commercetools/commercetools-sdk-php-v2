<?php

namespace Commercetools\Api\Models\Product;

use Commercetools\Exception\InvalidArgumentException;
use stdClass;

class ProductVariantSkuAccessor
{
    /**
     * @var ProductVariantCollection
     */
    private $variants;

    /**
     * @psalm-var array<string, int>
     */
    private $skuIndex = [];

    /**
     * @psalm-assert ProductProjection|ProductData $product
     * @psalm-param mixed $product
     * @param $product
     * @throws InvalidArgumentException
     */
    private function __construct($product)
    {
        if (!($product instanceof ProductProjection || $product instanceof ProductData)) {
            throw new InvalidArgumentException("");
        }
        $variants = $product->getVariants();
        $variants = $variants != null ? $variants->toArray() ?? [] : [];
        $masterVariant = $product->getMasterVariant();
        if ($masterVariant != null) {
            array_unshift($variants, $masterVariant);
        }

        /**
         * @var array<int, stdClass|ProductVariant> $variants
         */
        $this->variants = new ProductVariantCollection($variants);

        /**
         * @var ProductVariant $variant
         */
        foreach ($this->variants as $index => $variant) {
            $this->skuIndex[(string)$variant->getSku()] = (int)$index;
        }
    }

    public function getBySku(string $sku): ?ProductVariant {
        return $this->variants->at($this->skuIndex[$sku]);
    }

    /**
     * @psalm-return callable(ProductProjection|ProductData): self
     */
    public static function of()
    {
        return function ($productProjection): ProductVariantSkuAccessor {
            return new self($productProjection);
        };
    }
}
