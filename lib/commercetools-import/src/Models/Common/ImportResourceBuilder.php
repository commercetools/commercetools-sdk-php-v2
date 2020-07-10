<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Categories\CategoryImport;
use Models\Categories\CategoryImportBuilder;
use Models\Prices\PriceImport;
use Models\Prices\PriceImportBuilder;
use Models\Productdrafts\ProductDraftImport;
use Models\Productdrafts\ProductDraftImportBuilder;
use Models\Products\ProductImport;
use Models\Products\ProductImportBuilder;
use Models\Producttypes\ProductTypeImport;
use Models\Producttypes\ProductTypeImportBuilder;
use Models\Productvariants\ProductVariantImport;
use Models\Productvariants\ProductVariantImportBuilder;

/**
 * @implements Builder<ImportResource>
 */
final class ImportResourceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ImportResource
    {
        return new ImportResourceModel(
            $this->key
        );
    }

    public static function of(): ImportResourceBuilder
    {
        return new self();
    }
}
