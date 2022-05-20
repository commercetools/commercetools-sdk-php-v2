<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LastModifiedBy extends ClientLogging
{
    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">APIClient</a> which modified the resource.</p>
     *
     * @return null|string
     */
    public function getClientId();

    /**
     * <p><a href="/../api/client-logging#external-user-ids">External user ID</a> provided by <code>X-External-User-ID</code> HTTP Header.</p>
     *
     * @return null|string
     */
    public function getExternalUserId();

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who modified the resource using a token from the <a href="/authorization#password-flow">password flow</a>.</p>
     *
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Indicates the <a href="/../api/authorization#tokens-for-anonymous-sessions">anonymous session</a> during which the resource was modified.</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void;

    /**
     * @param ?string $externalUserId
     */
    public function setExternalUserId(?string $externalUserId): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;
}
