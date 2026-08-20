<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreTermsOfServiceUrlSetMessagePayload extends MessagePayload
{
    public const FIELD_TERMS_OF_SERVICE_URL = 'termsOfServiceUrl';

    /**
     * <p>The <code>termsOfServiceUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetTermsOfServiceUrlAction">Set Terms Of Service Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getTermsOfServiceUrl();

    /**
     * @param ?string $termsOfServiceUrl
     */
    public function setTermsOfServiceUrl(?string $termsOfServiceUrl): void;
}
