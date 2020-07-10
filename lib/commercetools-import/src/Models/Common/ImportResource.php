<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Categories\CategoryImport;
use Models\Prices\PriceImport;
use Models\Productdrafts\ProductDraftImport;
use Models\Products\ProductImport;
use Models\Producttypes\ProductTypeImport;
use Models\Productvariants\ProductVariantImport;

interface ImportResource extends JsonObject
{

    public const FIELD_KEY = 'key';

    /**
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
