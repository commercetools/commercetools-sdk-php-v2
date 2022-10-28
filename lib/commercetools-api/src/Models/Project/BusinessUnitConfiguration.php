<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitConfiguration extends JsonObject
{
    public const FIELD_MY_BUSINESS_UNIT_STATUS_ON_CREATION = 'myBusinessUnitStatusOnCreation';

    /**
     * <p>Status of Business Units created using the <a href="/../api/projects/me-business-units#create-businessunit">My Business Unit endpoint</a>.</p>
     *

     * @return null|string
     */
    public function getMyBusinessUnitStatusOnCreation();

    /**
     * @param ?string $myBusinessUnitStatusOnCreation
     */
    public function setMyBusinessUnitStatusOnCreation(?string $myBusinessUnitStatusOnCreation): void;
}
