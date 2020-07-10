<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Categories\CategoryImport;
use Models\Categories\CategoryImportModel;
use Models\Prices\PriceImport;
use Models\Prices\PriceImportModel;
use Models\Productdrafts\ProductDraftImport;
use Models\Productdrafts\ProductDraftImportModel;
use Models\Products\ProductImport;
use Models\Products\ProductImportModel;
use Models\Producttypes\ProductTypeImport;
use Models\Producttypes\ProductTypeImportModel;
use Models\Productvariants\ProductVariantImport;
use Models\Productvariants\ProductVariantImportModel;

/**
 * @internal
 */
final class ImportResourceModel extends JsonObjectModel implements ImportResource
{

    /**
     * @var ?string
     */
    protected $key;


    public function __construct(
        string $key = null
    ) {
        $this->key = $key;

    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }



}
