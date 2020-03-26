<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Ml\Models\Common\ProductReference;

use Commercetools\Ml\Models\Common\ProductReferenceModel;
use stdClass;

/**
 * @internal
 */
final class MissingImagesModel extends JsonObjectModel implements MissingImages
{
    /**
     * @var ?ProductReference
     */
    protected $product;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?int
     */
    protected $imageCount;


    public function __construct(
        ProductReference $product = null,
        int $variantId = null,
        int $imageCount = null
    ) {
        $this->product = $product;
        $this->variantId = $variantId;
        $this->imageCount = $imageCount;
    }

    /**
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MissingImages::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>ID of the variant</p>
     *
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingImages::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p>Number of images the variant contains.</p>
     *
     * @return null|int
     */
    public function getImageCount()
    {
        if (is_null($this->imageCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingImages::FIELD_IMAGE_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->imageCount = (int) $data;
        }

        return $this->imageCount;
    }

    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setImageCount(?int $imageCount): void
    {
        $this->imageCount = $imageCount;
    }
}
