<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ClientLogging>
 */
final class ClientLoggingBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $clientId;

    /**

     * @var ?string
     */
    private $externalUserId;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var ?string
     */
    private $anonymousId;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $associate;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> which created the resource.</p>
     *

     * @return null|string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * <p><a href="/../api/general-concepts#external-user-ids">External user ID</a> provided by <code>X-External-User-ID</code> HTTP Header.</p>
     *

     * @return null|string
     */
    public function getExternalUserId()
    {
        return $this->externalUserId;
    }

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who modified the resource using a token from the <a href="/authorization#password-flow">password flow</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Indicates that the resource was modified during an <a href="ctp:api:type:AnonymousSession">anonymous session</a> with the logged ID.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * <p>Indicates the <a href="ctp:api:type:Customer">Customer</a> who created or modified the resource in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/associates-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getAssociate()
    {
        return $this->associate instanceof CustomerReferenceBuilder ? $this->associate->build() : $this->associate;
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
     * @param ?string $externalUserId
     * @return $this
     */
    public function withExternalUserId(?string $externalUserId)
    {
        $this->externalUserId = $externalUserId;

        return $this;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
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
     * @param ?CustomerReference $associate
     * @return $this
     */
    public function withAssociate(?CustomerReference $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withAssociate() instead
     * @return $this
     */
    public function withAssociateBuilder(?CustomerReferenceBuilder $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    public function build(): ClientLogging
    {
        return new ClientLoggingModel(
            $this->clientId,
            $this->externalUserId,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->anonymousId,
            $this->associate instanceof CustomerReferenceBuilder ? $this->associate->build() : $this->associate
        );
    }

    public static function of(): ClientLoggingBuilder
    {
        return new self();
    }
}
