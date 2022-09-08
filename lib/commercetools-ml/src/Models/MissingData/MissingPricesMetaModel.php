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
final class MissingPricesMetaModel extends JsonObjectModel implements MissingPricesMeta
{
    /**
     * @deprecated
     * @var ?MissingPricesProductLevel
     */
    protected $productLevel;

    /**
     * @deprecated
     * @var ?MissingPricesVariantLevel
     */
    protected $variantLevel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MissingPricesProductLevel $productLevel = null,
        ?MissingPricesVariantLevel $variantLevel = null
    ) {
        $this->productLevel = $productLevel;
        $this->variantLevel = $variantLevel;
    }

    /**
     * @deprecated
     * @return null|MissingPricesProductLevel
     */
    public function getProductLevel()
    {
        if (is_null($this->productLevel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_LEVEL);
            if (is_null($data)) {
                return null;
            }

            $this->productLevel = MissingPricesProductLevelModel::of($data);
        }

        return $this->productLevel;
    }

    /**
     * @deprecated
     * @return null|MissingPricesVariantLevel
     */
    public function getVariantLevel()
    {
        if (is_null($this->variantLevel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_LEVEL);
            if (is_null($data)) {
                return null;
            }

            $this->variantLevel = MissingPricesVariantLevelModel::of($data);
        }

        return $this->variantLevel;
    }


    /**
     * @param ?MissingPricesProductLevel $productLevel
     */
    public function setProductLevel(?MissingPricesProductLevel $productLevel): void
    {
        $this->productLevel = $productLevel;
    }

    /**
     * @param ?MissingPricesVariantLevel $variantLevel
     */
    public function setVariantLevel(?MissingPricesVariantLevel $variantLevel): void
    {
        $this->variantLevel = $variantLevel;
    }
}
