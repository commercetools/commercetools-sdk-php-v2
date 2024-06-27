<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringRemoveVariantAction>
 */
final class ProductTailoringRemoveVariantActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $id;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the ProductVariant to remove from the Tailoring.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The <code>sku</code> of the ProductVariant to remove from the Tailoring.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>If <code>true</code>, only the staged Product Variant Tailoring is removed. If <code>false</code>, both the current and staged Product Variant Tailoring is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?int $id
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

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


    public function build(): ProductTailoringRemoveVariantAction
    {
        return new ProductTailoringRemoveVariantActionModel(
            $this->id,
            $this->sku,
            $this->staged
        );
    }

    public static function of(): ProductTailoringRemoveVariantActionBuilder
    {
        return new self();
    }
}
