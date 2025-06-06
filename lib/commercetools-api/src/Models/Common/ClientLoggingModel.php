<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ClientLoggingModel extends JsonObjectModel implements ClientLogging
{
    /**
     *
     * @var ?string
     */
    protected $clientId;

    /**
     *
     * @var ?string
     */
    protected $externalUserId;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?CustomerReference
     */
    protected $associate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $clientId = null,
        ?string $externalUserId = null,
        ?CustomerReference $customer = null,
        ?string $anonymousId = null,
        ?CustomerReference $associate = null
    ) {
        $this->clientId = $clientId;
        $this->externalUserId = $externalUserId;
        $this->customer = $customer;
        $this->anonymousId = $anonymousId;
        $this->associate = $associate;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> which created the resource.</p>
     *
     *
     * @return null|string
     */
    public function getClientId()
    {
        if (is_null($this->clientId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CLIENT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->clientId = (string) $data;
        }

        return $this->clientId;
    }

    /**
     * <p><a href="/../api/general-concepts#external-user-ids">External user ID</a> provided by <code>X-External-User-ID</code> HTTP Header.</p>
     *
     *
     * @return null|string
     */
    public function getExternalUserId()
    {
        if (is_null($this->externalUserId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_USER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalUserId = (string) $data;
        }

        return $this->externalUserId;
    }

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who modified the resource using a token from the <a href="/authorization#password-flow">password flow</a>.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Indicates that the resource was modified during an <a href="ctp:api:type:AnonymousSession">anonymous session</a> with the logged ID.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who created or modified the resource in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/associates-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getAssociate()
    {
        if (is_null($this->associate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE);
            if (is_null($data)) {
                return null;
            }

            $this->associate = CustomerReferenceModel::of($data);
        }

        return $this->associate;
    }


    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @param ?string $externalUserId
     */
    public function setExternalUserId(?string $externalUserId): void
    {
        $this->externalUserId = $externalUserId;
    }

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?CustomerReference $associate
     */
    public function setAssociate(?CustomerReference $associate): void
    {
        $this->associate = $associate;
    }
}
