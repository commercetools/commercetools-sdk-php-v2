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

interface ClientLogging extends JsonObject
{
    public const FIELD_IS_PLATFORM_CLIENT = 'isPlatformClient';
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_EXTERNAL_USER_ID = 'externalUserId';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_ASSOCIATE = 'associate';

    /**
     * <p>If <code>true</code>, the resource was created or modified by an internal process or the <a href="/merchant-center">Merchant Center</a>. Otherwise, it was created or modified by an <a href="ctp:api:type:ApiClient">API Client</a> of your Project.</p>
     *

     * @return null|bool
     */
    public function getIsPlatformClient();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> which created the resource.</p>
     *

     * @return null|string
     */
    public function getClientId();

    /**
     * <p><a href="/api/general-concepts#external-user-ids">External user ID</a> provided by <code>X-External-User-ID</code> HTTP Header.</p>
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
     * <p>Indicates that the resource was modified during an <a href="ctp:api:type:AnonymousSession">anonymous session</a> with the logged ID.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who created or modified the resource in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/offering/commerce-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/associates-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate();

    /**
     * @param ?bool $isPlatformClient
     */
    public function setIsPlatformClient(?bool $isPlatformClient): void;

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

    /**
     * @param ?CustomerReference $associate
     */
    public function setAssociate(?CustomerReference $associate): void;
}
