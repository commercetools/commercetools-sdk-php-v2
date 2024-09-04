<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantDeletedMessagePayload>
 */
final class ProductVariantDeletedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $variant;

    /**

     * @var ?array
     */
    private $removedImageUrls;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> that was added.</p>
     *

     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * <p>List of image URLs that were removed with the <a href="ctp:api:type:ProductRemoveVariantAction">Remove Product Variant</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        return $this->removedImageUrls;
    }

    /**
     * <p>If <code>true</code>, this message informs that only the staged ProductVariant has been removed by the update action.
     * If <code>false</code>, both the current and staged ProductVariant have been removed.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?ProductVariant $variant
     * @return $this
     */
    public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?array $removedImageUrls
     * @return $this
     */
    public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

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

    /**
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): ProductVariantDeletedMessagePayload
    {
        return new ProductVariantDeletedMessagePayloadModel(
            $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant,
            $this->removedImageUrls,
            $this->staged
        );
    }

    public static function of(): ProductVariantDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
