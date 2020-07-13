<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Ml\Models\Common\ProductVariantCollection;
use stdClass;

/**
 * @internal
 */
final class ResultItemModel extends JsonObjectModel implements ResultItem
{
    /**
     * @var ?string
     */
    protected $imageUrl;

    /**
     * @var ?ProductVariantCollection
     */
    protected $productVariants;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $imageUrl = null,
        ?ProductVariantCollection $productVariants = null
    ) {
        $this->imageUrl = $imageUrl;
        $this->productVariants = $productVariants;
    }

    /**
     * <p>The URL of the image.</p>
     *
     * @return null|string
     */
    public function getImageUrl()
    {
        if (is_null($this->imageUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_IMAGE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->imageUrl = (string) $data;
        }

        return $this->imageUrl;
    }

    /**
     * <p>An array of product variants containing the image URL.</p>
     *
     * @return null|ProductVariantCollection
     */
    public function getProductVariants()
    {
        if (is_null($this->productVariants)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_PRODUCT_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->productVariants = ProductVariantCollection::fromArray($data);
        }

        return $this->productVariants;
    }


    /**
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @param ?ProductVariantCollection $productVariants
     */
    public function setProductVariants(?ProductVariantCollection $productVariants): void
    {
        $this->productVariants = $productVariants;
    }
}
