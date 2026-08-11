<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringSetExternalImagesAction>
 */
final class ProductTailoringSetExternalImagesActionBuilder implements Builder
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

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the tailored ProductVariant or Variant (<a href="/offering/compatibility#public-beta">BETA</a>) to update.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The <code>sku</code> of the tailored ProductVariant or Variant (<a href="/offering/compatibility#public-beta">BETA</a>) to update.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Images of the tailored ProductVariant or Variant (<a href="/offering/compatibility#public-beta">BETA</a>).</p>
     * <p>Don't provide this field if you want to remove all images from the tailored ProductVariant or Variant (<a href="/offering/compatibility#public-beta">BETA</a>).
     * Set to <code>[]</code> (empty) if you want to hide all images of the original ProductVariant or Variant (<a href="/offering/compatibility#public-beta">BETA</a>) on the tailored ProductVariant or Variant (<a href="/offering/compatibility#public-beta">BETA</a>).</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Whether only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> are updated.</p>
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
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

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


    public function build(): ProductTailoringSetExternalImagesAction
    {
        return new ProductTailoringSetExternalImagesActionModel(
            $this->variantId,
            $this->sku,
            $this->images,
            $this->staged
        );
    }

    public static function of(): ProductTailoringSetExternalImagesActionBuilder
    {
        return new self();
    }
}
