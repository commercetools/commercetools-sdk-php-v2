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

    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ASSOCIATE = 'associate';
    public const FIELD_IS_PLATFORM_CLIENT = 'isPlatformClient';

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.</p>
     * <p>Present only if the change was made in the Merchant Center.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Indicates who performed the change.</p>
     * <ul>
     * <li>If the change was made by a user, the value is <code>&quot;user&quot;</code>.</li>
     * <li>If the change was made by an API Client with or without an <a href="/client-logging#external-user-ids">external user ID</a>, the value is <code>&quot;external-user&quot;</code>.</li>
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
     * <p>The <a href="ctp:api:type:Associate">Associate</a> who made the change in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Present only if the Associate acts on behalf of a company using the <a href="/associates-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|Reference
     */
    public function getAssociate();

    /**
     * <p><code>true</code> if the change was made using the Merchant Center or <a href="https://impex.europe-west1.gcp.commercetools.com/">ImpEx</a>.</p>
     *

     * @return null|bool
     */
    public function getIsPlatformClient();

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
     * @param ?bool $isPlatformClient
     */
    public function setIsPlatformClient(?bool $isPlatformClient): void;
}
