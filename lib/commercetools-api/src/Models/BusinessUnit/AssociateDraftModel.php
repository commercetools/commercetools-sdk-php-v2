<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateDraftModel extends JsonObjectModel implements AssociateDraft
{
    /**
     *
     * @var ?array
     */
    protected $roles;

    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $roles = null,
        ?CustomerResourceIdentifier $customer = null
    ) {
        $this->roles = $roles;
        $this->customer = $customer;
    }

    /**
     * <p>Roles the Associate should hold within the Business Unit.</p>
     *
     *
     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> to be part of the Business Unit.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }


    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
}
