<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductChangeMasterVariantAction>
 */
final class ProductChangeMasterVariantActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the ProductVariant to become the Master Variant.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The <code>sku</code> of the ProductVariant to become the Master Variant.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>If <code>true</code>, only the staged Master Variant is changed. If <code>false</code>, both the current and staged Master Variant are changed.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductChangeMasterVariantAction
    {
        return new ProductChangeMasterVariantActionModel(
            $this->variantId,
            $this->sku,
            $this->staged
        );
    }

    public static function of(): ProductChangeMasterVariantActionBuilder
    {
        return new self();
    }
}
