<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnit;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitCreatedMessage extends Message
{
    public const FIELD_BUSINESS_UNIT = 'businessUnit';

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">Business Unit</a> that was created.</p>
     *

     * @return null|BusinessUnit
     */
    public function getBusinessUnit();

    /**
     * @param ?BusinessUnit $businessUnit
     */
    public function setBusinessUnit(?BusinessUnit $businessUnit): void;
}
