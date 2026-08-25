<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetContactUrlAction extends StoreUpdateAction
{
    public const FIELD_CONTACT_URL = 'contactUrl';

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getContactUrl();

    /**
     * @param ?string $contactUrl
     */
    public function setContactUrl(?string $contactUrl): void;
}
