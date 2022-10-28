<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

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
final class AssociateModel extends JsonObjectModel implements Associate
{
    /**
     *
     * @var ?array
     */
    protected $roles;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $roles = null,
        ?CustomerReference $customer = null
    ) {
        $this->roles = $roles;
        $this->customer = $customer;
    }

    /**
     * <p>Roles the Associate holds within the Business Unit.</p>
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
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that is part of the Business Unit.</p>
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
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
}
