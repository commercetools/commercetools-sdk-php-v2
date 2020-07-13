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
use stdClass;

/**
 * @internal
 */
final class MissingImagesMetaModel extends JsonObjectModel implements MissingImagesMeta
{
    /**
     * @var ?MissingImagesProductLevel
     */
    protected $productLevel;

    /**
     * @var ?MissingImagesVariantLevel
     */
    protected $variantLevel;

    /**
     * @var ?int
     */
    protected $threshold;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MissingImagesProductLevel $productLevel = null,
        ?MissingImagesVariantLevel $variantLevel = null,
        ?int $threshold = null
    ) {
        $this->productLevel = $productLevel;
        $this->variantLevel = $variantLevel;
        $this->threshold = $threshold;
    }

    /**
     * @return null|MissingImagesProductLevel
     */
    public function getProductLevel()
    {
        if (is_null($this->productLevel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_LEVEL);
            if (is_null($data)) {
                return null;
            }

            $this->productLevel = MissingImagesProductLevelModel::of($data);
        }

        return $this->productLevel;
    }

    /**
     * @return null|MissingImagesVariantLevel
     */
    public function getVariantLevel()
    {
        if (is_null($this->variantLevel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_LEVEL);
            if (is_null($data)) {
                return null;
            }

            $this->variantLevel = MissingImagesVariantLevelModel::of($data);
        }

        return $this->variantLevel;
    }

    /**
     * <p>The minimum number of images a product variant must have. Anything below this value is considered a product variant with missing images.</p>
     *
     * @return null|int
     */
    public function getThreshold()
    {
        if (is_null($this->threshold)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_THRESHOLD);
            if (is_null($data)) {
                return null;
            }
            $this->threshold = (int) $data;
        }

        return $this->threshold;
    }


    /**
     * @param ?MissingImagesProductLevel $productLevel
     */
    public function setProductLevel(?MissingImagesProductLevel $productLevel): void
    {
        $this->productLevel = $productLevel;
    }

    /**
     * @param ?MissingImagesVariantLevel $variantLevel
     */
    public function setVariantLevel(?MissingImagesVariantLevel $variantLevel): void
    {
        $this->variantLevel = $variantLevel;
    }

    /**
     * @param ?int $threshold
     */
    public function setThreshold(?int $threshold): void
    {
        $this->threshold = $threshold;
    }
}
