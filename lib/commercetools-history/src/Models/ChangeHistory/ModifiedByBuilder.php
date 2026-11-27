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

     * @var ?bool
     */
    private $isPlatformClient;

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
    private $externalUserId;

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

     * @var null|Attribution|AttributionBuilder
     */
    private $attributedTo;

    /**
     * <p>Whether the change was made using the Merchant Center.</p>
     *

     * @return null|bool
     */
    public function getIsPlatformClient()
    {
        return $this->isPlatformClient;
    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.</p>
     * <p>Present only if <code>isPlatformClient</code> is <code>true</code>.</p>
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
     * <p><a href="/general-concepts#external-user-ids">External user ID</a> of the user who made the change.</p>
     * <p>Present only if the change was made by an API Client with an external user ID.</p>
     *

     * @return null|string
     */
    public function getExternalUserId()
    {
        return $this->externalUserId;
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
     * <p>The <a href="ctp:api:type:Associate">Associate</a> who made the change in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/offering/commerce-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/business-units-and-associates-apis-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *

     * @return null|Reference
     */
    public function getAssociate()
    {
        return $this->associate instanceof ReferenceBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * <p>Indicates if the change was made indirectly, for example by an agent acting on behalf of a user.</p>
     * <p>Present only for changes made after 22 October 2026.</p>
     *

     * @return null|Attribution
     */
    public function getAttributedTo()
    {
        return $this->attributedTo instanceof AttributionBuilder ? $this->attributedTo->build() : $this->attributedTo;
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
     * @param ?string $externalUserId
     * @return $this
     */
    public function withExternalUserId(?string $externalUserId)
    {
        $this->externalUserId = $externalUserId;

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
     * @param ?Attribution $attributedTo
     * @return $this
     */
    public function withAttributedTo(?Attribution $attributedTo)
    {
        $this->attributedTo = $attributedTo;

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

    /**
     * @deprecated use withAttributedTo() instead
     * @return $this
     */
    public function withAttributedToBuilder(?AttributionBuilder $attributedTo)
    {
        $this->attributedTo = $attributedTo;

        return $this;
    }

    public function build(): ModifiedBy
    {
        return new ModifiedByModel(
            $this->isPlatformClient,
            $this->id,
            $this->type,
            $this->clientId,
            $this->externalUserId,
            $this->anonymousId,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->associate instanceof ReferenceBuilder ? $this->associate->build() : $this->associate,
            $this->attributedTo instanceof AttributionBuilder ? $this->attributedTo->build() : $this->attributedTo
        );
    }

    public static function of(): ModifiedByBuilder
    {
        return new self();
    }
}
