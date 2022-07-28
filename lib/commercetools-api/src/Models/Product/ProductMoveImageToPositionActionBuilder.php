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
 * @implements Builder<ProductMoveImageToPositionAction>
 */
final class ProductMoveImageToPositionActionBuilder implements Builder
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

     * @var ?string
     */
    private $imageUrl;

    /**

     * @var ?int
     */
    private $position;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The URL of the image to update.</p>
     *

     * @return null|string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * <p>Position in <code>images</code> where the image should be moved. Must be between <code>0</code> and the total number of images minus <code>1</code>.</p>
     *

     * @return null|int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> is updated.</p>
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
     * @param ?string $imageUrl
     * @return $this
     */
    public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @param ?int $position
     * @return $this
     */
    public function withPosition(?int $position)
    {
        $this->position = $position;

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


    public function build(): ProductMoveImageToPositionAction
    {
        return new ProductMoveImageToPositionActionModel(
            $this->variantId,
            $this->sku,
            $this->imageUrl,
            $this->position,
            $this->staged
        );
    }

    public static function of(): ProductMoveImageToPositionActionBuilder
    {
        return new self();
    }
}
