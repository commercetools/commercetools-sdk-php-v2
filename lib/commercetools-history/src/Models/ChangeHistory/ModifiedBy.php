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
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_IS_PLATFORM_CLIENT = 'isPlatformClient';

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.
     * Present only if the change was made in the Merchant Center.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Indicates whether the change was made by a user or the API client with or without an
     * <a href="/client-logging#external-user-ids">External user ID</a>.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p><a href="/types#reference">Reference</a> to the
     * <a href="/projects/customers#customer">Customer</a> who made the change. Present only if
     * the change was made using a token from the <a href="/authorization#password-flow">Password
     * Flow</a>.</p>
     *
     * @return null|Reference
     */
    public function getCustomer();

    /**
     * <p>Present only if the change was made using a token from an <a href="/authorization#tokens-for-anonymous-sessions">Anonymous
     * Session</a>.</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="/projects/api-clients#apiclient">API
     * Client</a> that made the change. Present only if
     * the change was made using an API Client.</p>
     *
     * @return null|string
     */
    public function getClientId();

    /**
     * <p><code>true</code> if the change was made via Merchant Center or <a href="https://impex.europe-west1.gcp.commercetools.com/">ImpEx</a>.</p>
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
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void;

    /**
     * @param ?bool $isPlatformClient
     */
    public function setIsPlatformClient(?bool $isPlatformClient): void;
}
