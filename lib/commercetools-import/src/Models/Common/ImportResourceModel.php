<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Categories\CategoryImport;

use Commercetools\Import\Models\Categories\CategoryImportModel;
use Commercetools\Import\Models\Prices\PriceImport;
use Commercetools\Import\Models\Prices\PriceImportModel;
use Commercetools\Import\Models\Products\ProductImport;
use Commercetools\Import\Models\Products\ProductImportModel;
use Commercetools\Import\Models\Producttypes\ProductTypeImport;
use Commercetools\Import\Models\Producttypes\ProductTypeImportModel;
use Commercetools\Import\Models\Productvariants\ProductVariantImport;
use Commercetools\Import\Models\Productvariants\ProductVariantImportModel;
use stdClass;

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
