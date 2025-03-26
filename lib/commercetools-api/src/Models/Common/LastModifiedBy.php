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
    public const FIELD_ATTRIBUTED_TO = 'attributedTo';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> which modified the resource.</p>
     *

     * @return null|string
     */
    public function getClientId();

    /**
     * <p><a href="/../api/general-concepts#external-user-ids">External user ID</a> provided by the <code>X-External-User-ID</code> HTTP Header or <code>external_user_id:{externalUserId}</code> <a href="/../api/scopes#external-oauth">scope</a>.</p>
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
     * <p>Indicates the <a href="ctp:api:type:AnonymousSession">anonymous session</a> during which the resource was modified.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Indicates if the resource was modified indirectly.</p>
     *

     * @return null|Attribution
     */
    public function getAttributedTo();

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who modified the resource in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/associates-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate();

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
     * @param ?Attribution $attributedTo
     */
    public function setAttributedTo(?Attribution $attributedTo): void;

    /**
     * @param ?CustomerReference $associate
     */
    public function setAssociate(?CustomerReference $associate): void;
}
