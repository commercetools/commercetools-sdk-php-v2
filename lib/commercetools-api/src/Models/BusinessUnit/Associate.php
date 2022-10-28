<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Associate extends JsonObject
{
    public const FIELD_ROLES = 'roles';
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>Roles the Associate holds within the Business Unit.</p>
     *

     * @return null|array
     */
    public function getRoles();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that is part of the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;
}
