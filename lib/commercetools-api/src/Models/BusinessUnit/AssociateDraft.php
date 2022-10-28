<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateDraft extends JsonObject
{
    public const FIELD_ROLES = 'roles';
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>Roles the Associate should hold within the Business Unit.</p>
     *

     * @return null|array
     */
    public function getRoles();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> to be part of the Business Unit.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
