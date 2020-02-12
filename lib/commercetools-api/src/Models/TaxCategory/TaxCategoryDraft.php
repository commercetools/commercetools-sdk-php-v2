<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RATES = 'rates';
    public const FIELD_KEY = 'key';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * @return null|TaxRateDraftCollection
     */
    public function getRates();

    /**
     * @return null|string
     */
    public function getKey();

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setRates(?TaxRateDraftCollection $rates): void;

    public function setKey(?string $key): void;
}
