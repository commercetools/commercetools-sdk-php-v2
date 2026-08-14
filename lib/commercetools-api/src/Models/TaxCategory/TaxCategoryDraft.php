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
     * <p>Name of the TaxCategory.</p>
     * <p>If the provided name is used by another TaxCategory in the Project, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Description of the TaxCategory.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Tax rates and subrates of states and countries.</p>
     *

     * @return null|TaxRateDraftCollection
     */
    public function getRates();

    /**
     * <p>User-defined unique identifier for the TaxCategory.</p>
     * <p>If the value is used by another TaxCategory in the Project, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?TaxRateDraftCollection $rates
     */
    public function setRates(?TaxRateDraftCollection $rates): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
