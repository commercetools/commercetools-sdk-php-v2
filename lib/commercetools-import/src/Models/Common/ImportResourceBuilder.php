<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Categories\CategoryImport;
use Commercetools\Import\Models\Categories\CategoryImportBuilder;
use Commercetools\Import\Models\Customers\CustomerImport;
use Commercetools\Import\Models\Customers\CustomerImportBuilder;
use Commercetools\Import\Models\Inventories\InventoryImport;
use Commercetools\Import\Models\Inventories\InventoryImportBuilder;
use Commercetools\Import\Models\Prices\PriceImport;
use Commercetools\Import\Models\Prices\PriceImportBuilder;
use Commercetools\Import\Models\Productdrafts\ProductDraftImport;
use Commercetools\Import\Models\Productdrafts\ProductDraftImportBuilder;
use Commercetools\Import\Models\Products\ProductImport;
use Commercetools\Import\Models\Products\ProductImportBuilder;
use Commercetools\Import\Models\Producttypes\ProductTypeImport;
use Commercetools\Import\Models\Producttypes\ProductTypeImportBuilder;
use Commercetools\Import\Models\Productvariants\ProductVariantImport;
use Commercetools\Import\Models\Productvariants\ProductVariantImportBuilder;
use stdClass;

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
     * @param ?string $key
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
