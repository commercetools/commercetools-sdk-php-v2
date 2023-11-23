<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

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

     * @var ?string
     */
    private $clientId;

    /**

     * @var ?string
     */
    private $anonymousId;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $customer;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $associate;

    /**

     * @var ?bool
     */
    private $isPlatformClient;

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.</p>
     * <p>Present only if the change was made in the Merchant Center.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="ctp:api:type:ApiClient">API Client</a> that made the change.</p>
     * <p>Present only if the change was made using an API Client.</p>
     *

     * @return null|string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * <p>Present only if the change was made using a token from an <a href="/authorization#tokens-for-anonymous-sessions">anonymous session</a>.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> who made the change.</p>
     * <p>Present only if the change was made using a token from the <a href="/authorization#password-flow">password flow</a>.</p>
     *

     * @return null|Reference
     */
    public function getCustomer()
    {
        return $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>The <a href="ctp:api:type:Associate">Associate</a> who made the change in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Present only if the Associate acts on behalf of a company using the <a href="/associates-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|Reference
     */
    public function getAssociate()
    {
        return $this->associate instanceof ReferenceBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * <p><code>true</code> if the change was made using the Merchant Center or <a href="https://impex.europe-west1.gcp.commercetools.com/">ImpEx</a>.</p>
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
     * @param ?string $clientId
     * @return $this
     */
    public function withClientId(?string $clientId)
    {
        $this->clientId = $clientId;

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
     * @param ?Reference $customer
     * @return $this
     */
    public function withCustomer(?Reference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?Reference $associate
     * @return $this
     */
    public function withAssociate(?Reference $associate)
    {
        $this->associate = $associate;

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
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?ReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withAssociate() instead
     * @return $this
     */
    public function withAssociateBuilder(?ReferenceBuilder $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    public function build(): ModifiedBy
    {
        return new ModifiedByModel(
            $this->id,
            $this->type,
            $this->clientId,
            $this->anonymousId,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->associate instanceof ReferenceBuilder ? $this->associate->build() : $this->associate,
            $this->isPlatformClient
        );
    }

    public static function of(): ModifiedByBuilder
    {
        return new self();
    }
}
