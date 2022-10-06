<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitContactEmailSetMessage extends Message
{
    public const FIELD_CONTACT_EMAIL = 'contactEmail';

    /**
     * <p>The contact email that was updated on the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|string
     */
    public function getContactEmail();

    /**
     * @param ?string $contactEmail
     */
    public function setContactEmail(?string $contactEmail): void;
}
