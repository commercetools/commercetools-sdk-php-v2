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
     * @var ?string
     */
    protected $clientId;

    /**
     * @var ?string
     */
    protected $externalUserId;

    /**
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     * @var ?string
     */
    protected $anonymousId;


    public function __construct(
        string $clientId = null,
        string $externalUserId = null,
        CustomerReference $customer = null,
        string $anonymousId = null
    ) {
        $this->clientId = $clientId;
        $this->externalUserId = $externalUserId;
        $this->customer = $customer;
        $this->anonymousId = $anonymousId;
    }

    /**
     * @return null|string
     */
    public function getClientId()
    {
        if (is_null($this->clientId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ClientLogging::FIELD_CLIENT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->clientId = (string) $data;
        }

        return $this->clientId;
    }

    /**
     * @return null|string
     */
    public function getExternalUserId()
    {
        if (is_null($this->externalUserId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ClientLogging::FIELD_EXTERNAL_USER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalUserId = (string) $data;
        }

        return $this->externalUserId;
    }

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ClientLogging::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ClientLogging::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function setExternalUserId(?string $externalUserId): void
    {
        $this->externalUserId = $externalUserId;
    }

    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
}
