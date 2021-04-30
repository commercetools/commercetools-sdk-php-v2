<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceModel;

/**
 * @internal
 */
final class ModifiedByModel extends JsonObjectModel implements ModifiedBy
{


    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Reference
     */
    protected $customer;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?string
     */
    protected $clientId;

    /**
     * @var ?bool
     */
    protected $isPlatformClient;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $type = null,
        ?Reference $customer = null,
        ?string $anonymousId = null,
        ?string $clientId = null,
        ?bool $isPlatformClient = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->customer = $customer;
        $this->anonymousId = $anonymousId;
        $this->clientId = $clientId;
        $this->isPlatformClient = $isPlatformClient;

    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.
     * Present only if the change was made in the Merchant Center.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id =  (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Indicates whether the change was made by a user or the API client with or without an
     * <a href="/client-logging#external-user-ids">External user ID</a>.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="/types#reference">Reference</a> to the
     * <a href="/projects/customers#customer">Customer</a> who made the change. Present only if
     * the change was made using a token from the <a href="/authorization#password-flow">Password
     * Flow</a>.</p>
     *
     * @return null|Reference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer =  ReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Present only if the change was made using a token from an <a href="/authorization#tokens-for-anonymous-sessions">Anonymous
     * Session</a>.</p>
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
            $this->anonymousId =  (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="/projects/api-clients#apiclient">API
     * Client</a> that made the change. Present only if
     * the change was made using an API Client.</p>
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
            $this->clientId =  (string) $data;
        }

        return $this->clientId;
    }

    /**
     * <p><code>true</code> if the change was made via Merchant Center or <a href="https://impex.europe-west1.gcp.commercetools.com/">ImPex</a>.</p>
     *
     * @return null|bool
     */
    public function getIsPlatformClient()
    {
        if (is_null($this->isPlatformClient)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_PLATFORM_CLIENT);
            if (is_null($data)) {
                return null;
            }
            $this->isPlatformClient =  (bool) $data;
        }

        return $this->isPlatformClient;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void
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
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @param ?bool $isPlatformClient
     */
    public function setIsPlatformClient(?bool $isPlatformClient): void
    {
        $this->isPlatformClient = $isPlatformClient;
    }



}
