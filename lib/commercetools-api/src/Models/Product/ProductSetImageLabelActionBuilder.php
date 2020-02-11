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
 * @implements Builder<ProductSetImageLabelAction>
 */
final class ProductSetImageLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $imageUrl;

    /**
     * @var ?string
     */
    private $label;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The URL of the image.</p>
     *
     * @return null|string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * <p>The new image label.
     * If left blank or set to null, the label is removed.</p>
     *
     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductSetImageLabelAction
    {
        return new ProductSetImageLabelActionModel(
            $this->sku,
            $this->variantId,
            $this->imageUrl,
            $this->label,
            $this->staged
        );
    }

    public static function of(): ProductSetImageLabelActionBuilder
    {
        return new self();
    }
}
