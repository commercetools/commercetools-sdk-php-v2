<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreContactUrlSetMessagePayload extends MessagePayload
{
    public const FIELD_CONTACT_URL = 'contactUrl';

    /**
     * <p>The <code>contactUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetContactUrlAction">Set Contact Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getContactUrl();

    /**
     * @param ?string $contactUrl
     */
    public function setContactUrl(?string $contactUrl): void;
}
