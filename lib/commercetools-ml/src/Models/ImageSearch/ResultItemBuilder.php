<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Ml\Models\Common\ProductVariantCollection;
use stdClass;

/**
 * @implements Builder<ResultItem>
 */
final class ResultItemBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $imageUrl;

    /**

     * @var ?ProductVariantCollection
     */
    private $productVariants;

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
     * <p>An array of product variants containing the image URL.</p>
     *

     * @return null|ProductVariantCollection
     */
    public function getProductVariants()
    {
        return $this->productVariants;
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
     * @param ?ProductVariantCollection $productVariants
     * @return $this
     */
    public function withProductVariants(?ProductVariantCollection $productVariants)
    {
        $this->productVariants = $productVariants;

        return $this;
    }


    public function build(): ResultItem
    {
        return new ResultItemModel(
            $this->imageUrl,
            $this->productVariants
        );
    }

    public static function of(): ResultItemBuilder
    {
        return new self();
    }
}
