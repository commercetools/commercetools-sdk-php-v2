<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitSetContactEmailAction extends MyBusinessUnitUpdateAction
{
    public const FIELD_CONTACT_EMAIL = 'contactEmail';

    /**
     * <p>Email to set.
     * If <code>contactEmail</code> is absent or <code>null</code>, the existing contact email, if any, will be removed.</p>
     *

     * @return null|string
     */
    public function getContactEmail();

    /**
     * @param ?string $contactEmail
     */
    public function setContactEmail(?string $contactEmail): void;
}
