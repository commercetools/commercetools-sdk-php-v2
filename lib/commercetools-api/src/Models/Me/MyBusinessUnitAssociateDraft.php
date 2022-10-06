<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitAssociateDraft extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> to create and assign to the Business Unit.</p>
     *

     * @return null|MyCustomerDraft
     */
    public function getCustomer();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?MyCustomerDraft $customer
     */
    public function setCustomer(?MyCustomerDraft $customer): void;
}
