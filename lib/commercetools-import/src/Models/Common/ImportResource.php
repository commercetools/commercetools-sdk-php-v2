<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Categories\CategoryImport;
use Commercetools\Import\Models\Customers\CustomerImport;
use Commercetools\Import\Models\Prices\PriceImport;
use Commercetools\Import\Models\Productdrafts\ProductDraftImport;
use Commercetools\Import\Models\Products\ProductImport;
use Commercetools\Import\Models\Producttypes\ProductTypeImport;
use Commercetools\Import\Models\Productvariants\ProductVariantImport;

interface ImportResource extends JsonObject
{
    public const FIELD_KEY = 'key';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
