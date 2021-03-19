<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ModifiedBy>
 */
final class ModifiedByBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $customer;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @var ?string
     */
    private $clientId;

    /**
     * @var ?bool
     */
    private $isPlatformClient;

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.
     * Present only if the change was made in the Merchant Center.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Indicates whether the change was made by a user with or without an
     * <a href="/client-logging#external-user-ids">External user ID</a>.</p>
     *
     * @return null|string
     */
    public function getType()
    {
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
        return $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Present only if the change was made using a token from an <a href="/authorization#tokens-for-anonymous-sessions">Anonymous
     * Session</a>.</p>
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
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
        return $this->clientId;
    }

    /**
     * <p><code>true</code> if the change was made via Merchant Center or <a href="https://impex.europe-west1.gcp.commercetools.com/">ImPex</a>.</p>
     *
     * @return null|bool
     */
    public function getIsPlatformClient()
    {
        return $this->isPlatformClient;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?Reference $customer
     * @return $this
     */
    public function withCustomer(?Reference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @param ?string $clientId
     * @return $this
     */
    public function withClientId(?string $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @param ?bool $isPlatformClient
     * @return $this
     */
    public function withIsPlatformClient(?bool $isPlatformClient)
    {
        $this->isPlatformClient = $isPlatformClient;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?ReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): ModifiedBy
    {
        return new ModifiedByModel(
            $this->id,
            $this->type,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->anonymousId,
            $this->clientId,
            $this->isPlatformClient
        );
    }

    public static function of(): ModifiedByBuilder
    {
        return new self();
    }
}
