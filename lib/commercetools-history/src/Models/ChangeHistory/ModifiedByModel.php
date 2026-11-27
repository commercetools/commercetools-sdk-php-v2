<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

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
     *
     * @var ?bool
     */
    protected $isPlatformClient;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $type;

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
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?Reference
     */
    protected $customer;

    /**
     *
     * @var ?Reference
     */
    protected $associate;

    /**
     *
     * @var ?Attribution
     */
    protected $attributedTo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $isPlatformClient = null,
        ?string $id = null,
        ?string $type = null,
        ?string $clientId = null,
        ?string $externalUserId = null,
        ?string $anonymousId = null,
        ?Reference $customer = null,
        ?Reference $associate = null,
        ?Attribution $attributedTo = null
    ) {
        $this->isPlatformClient = $isPlatformClient;
        $this->id = $id;
        $this->type = $type;
        $this->clientId = $clientId;
        $this->externalUserId = $externalUserId;
        $this->anonymousId = $anonymousId;
        $this->customer = $customer;
        $this->associate = $associate;
        $this->attributedTo = $attributedTo;

    }

    /**
     * <p>Whether the change was made using the Merchant Center.</p>
     *
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
            $this->isPlatformClient = (bool) $data;
        }

        return $this->isPlatformClient;
    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the Merchant Center user who made the change.</p>
     * <p>Present only if <code>isPlatformClient</code> is <code>true</code>.</p>
     *
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
            $this->id = (string) $data;
        }

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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="ctp:api:type:ApiClient">API Client</a> that made the change.</p>
     * <p>Present only if the change was made using an API Client.</p>
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
     * <p><a href="/general-concepts#external-user-ids">External user ID</a> of the user who made the change.</p>
     * <p>Present only if the change was made by an API Client with an external user ID.</p>
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
     * <p>Present only if the change was made using a token from an <a href="/authorization#tokens-for-anonymous-sessions">anonymous session</a>.</p>
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
     * <p>The <a href="ctp:api:type:Customer">Customer</a> who made the change.</p>
     * <p>Present only if the change was made using a token from the <a href="/authorization#password-flow">password flow</a>.</p>
     *
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
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->customer = $className::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>The <a href="ctp:api:type:Associate">Associate</a> who made the change in the context of a <a href="ctp:api:type:BusinessUnit">Business Unit</a>. Only available for <a href="/offering/commerce-b2b">B2B</a>-enabled Projects when an Associate acts on behalf of a company using the <a href="/business-units-and-associates-apis-overview#on-the-associate-endpoints">associate endpoints</a>.</p>
     *
     *
     * @return null|Reference
     */
    public function getAssociate()
    {
        if (is_null($this->associate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->associate = $className::of($data);
        }

        return $this->associate;
    }

    /**
     * <p>Indicates if the change was made indirectly, for example by an agent acting on behalf of a user.</p>
     * <p>Present only for changes made after 22 October 2026.</p>
     *
     *
     * @return null|Attribution
     */
    public function getAttributedTo()
    {
        if (is_null($this->attributedTo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTED_TO);
            if (is_null($data)) {
                return null;
            }

            $this->attributedTo = AttributionModel::of($data);
        }

        return $this->attributedTo;
    }


    /**
     * @param ?bool $isPlatformClient
     */
    public function setIsPlatformClient(?bool $isPlatformClient): void
    {
        $this->isPlatformClient = $isPlatformClient;
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
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?Reference $associate
     */
    public function setAssociate(?Reference $associate): void
    {
        $this->associate = $associate;
    }

    /**
     * @param ?Attribution $attributedTo
     */
    public function setAttributedTo(?Attribution $attributedTo): void
    {
        $this->attributedTo = $attributedTo;
    }



}
