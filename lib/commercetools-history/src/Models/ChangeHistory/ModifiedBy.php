<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Reference;

interface ModifiedBy extends JsonObject
{

    public const FIELD_IS_PLATFORM_CLIENT = 'isPlatformClient';
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_EXTERNAL_USER_ID = 'externalUserId';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ASSOCIATE = 'associate';
    public const FIELD_ATTRIBUTED_TO = 'attributedTo';

    /**
     * <p>Whether the change was made using the Merchant Center.</p>
     *

     * @return null|bool
     */
    public function getIsPlatformClient();

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.</p>
     * <p>Present only if <code>isPlatformClient</code> is <code>true</code>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Indicates who performed the change.</p>
     * <ul>
     * <li>If the change was made by a user, the value is <code>&quot;user&quot;</code>.</li>
     * <li>If the change was made by an API Client with or without an <a href="/general-concepts#external-user-ids">external user ID</a>, the value is <code>&quot;external-user&quot;</code>.</li>
     * <li>If the change was made by an <a href="ctp:api:type:Associate">Associate</a>, the value is <code>&quot;associate&quot;</code>.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="ctp:api:type:ApiClient">API Client</a> that made the change.</p>
     * <p>Present only if the change was made using an API Client.</p>
     *

     * @return null|string
     */
    public function getClientId();

    /**
     * <p><a href="/general-concepts#external-user-ids">External user ID</a> of the user who made the change.</p>
     * <p>Present only if the change was made by an API Client with an external user ID.</p>
     *

     * @return null|string
     */
    public function getExternalUserId();

    /**
     * <p>Present only if the change was made using a token from an <a href="/authorization#tokens-for-anonymous-sessions">anonymous session</a>.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> who made the change.</p>
     * <p>Present only if the change was made using a token from the <a href="/authorization#password-flow">password flow</a>.</p>
     *

     * @return null|Reference
     */
    public function getCustomer();

    /**
     * <p>The <a href="ctp:api:type:Associate">Associate</a> who made the change in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/offering/commerce-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/business-units-and-associates-apis-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|Reference
     */
    public function getAssociate();

    /**
     * <p>Indicates if the change was made indirectly, for example by an agent acting on behalf of a user.</p>
     * <p>Present only for changes made after 22 October 2026.</p>
     *

     * @return null|Attribution
     */
    public function getAttributedTo();

    /**
     * @param ?bool $isPlatformClient
     */
    public function setIsPlatformClient(?bool $isPlatformClient): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void;

    /**
     * @param ?string $externalUserId
     */
    public function setExternalUserId(?string $externalUserId): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void;

    /**
     * @param ?Reference $associate
     */
    public function setAssociate(?Reference $associate): void;

    /**
     * @param ?Attribution $attributedTo
     */
    public function setAttributedTo(?Attribution $attributedTo): void;
}
