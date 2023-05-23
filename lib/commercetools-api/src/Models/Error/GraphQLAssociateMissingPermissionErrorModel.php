<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
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
final class GraphQLAssociateMissingPermissionErrorModel extends JsonObjectModel implements GraphQLAssociateMissingPermissionError
{
    public const DISCRIMINATOR_VALUE = 'AssociateMissingPermission';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $associate;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;

    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $associateOnBehalf;

    /**
     *
     * @var ?array
     */
    protected $permissions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerResourceIdentifier $associate = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?CustomerResourceIdentifier $associateOnBehalf = null,
        ?array $permissions = null,
        ?string $code = null
    ) {
        $this->associate = $associate;
        $this->businessUnit = $businessUnit;
        $this->associateOnBehalf = $associateOnBehalf;
        $this->permissions = $permissions;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p><a href="ctp:api:type:CustomerResourceIdentifier">ResourceIdentifier</a> to the <a href="ctp:api:type:Associate">Associate</a> that tried to perform the action.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getAssociate()
    {
        if (is_null($this->associate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE);
            if (is_null($data)) {
                return null;
            }

            $this->associate = CustomerResourceIdentifierModel::of($data);
        }

        return $this->associate;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitResourceIdentifier">ResourceIdentifier</a> to the <a href="ctp:api:type:BusinessUnit">BusinessUnit</a>.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:CustomerResourceIdentifier">ResourceIdentifier</a> of the <a href="ctp:api:type:Associate">Associate</a> on whose behalf the action is performed.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getAssociateOnBehalf()
    {
        if (is_null($this->associateOnBehalf)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ON_BEHALF);
            if (is_null($data)) {
                return null;
            }

            $this->associateOnBehalf = CustomerResourceIdentifierModel::of($data);
        }

        return $this->associateOnBehalf;
    }

    /**
     * <p>The Permissions that the <a href="ctp:api:type:Associate">Associate</a> performing the action lacks. At least one of these Permissions is needed.</p>
     *
     *
     * @return null|array
     */
    public function getPermissions()
    {
        if (is_null($this->permissions)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PERMISSIONS);
            if (is_null($data)) {
                return null;
            }
            $this->permissions = $data;
        }

        return $this->permissions;
    }


    /**
     * @param ?CustomerResourceIdentifier $associate
     */
    public function setAssociate(?CustomerResourceIdentifier $associate): void
    {
        $this->associate = $associate;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?CustomerResourceIdentifier $associateOnBehalf
     */
    public function setAssociateOnBehalf(?CustomerResourceIdentifier $associateOnBehalf): void
    {
        $this->associateOnBehalf = $associateOnBehalf;
    }

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void
    {
        $this->permissions = $permissions;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
