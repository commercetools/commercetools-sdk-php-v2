<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitConfigurationModel extends JsonObjectModel implements BusinessUnitConfiguration
{
    /**
     *
     * @var ?string
     */
    protected $myBusinessUnitStatusOnCreation;

    /**
     *
     * @var ?AssociateRoleKeyReference
     */
    protected $myBusinessUnitAssociateRoleOnCreation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $myBusinessUnitStatusOnCreation = null,
        ?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation = null
    ) {
        $this->myBusinessUnitStatusOnCreation = $myBusinessUnitStatusOnCreation;
        $this->myBusinessUnitAssociateRoleOnCreation = $myBusinessUnitAssociateRoleOnCreation;
    }

    /**
     * <p>Status of Business Units created using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *
     *
     * @return null|string
     */
    public function getMyBusinessUnitStatusOnCreation()
    {
        if (is_null($this->myBusinessUnitStatusOnCreation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MY_BUSINESS_UNIT_STATUS_ON_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->myBusinessUnitStatusOnCreation = (string) $data;
        }

        return $this->myBusinessUnitStatusOnCreation;
    }

    /**
     * <p>Default <a href="ctp:api:type:AssociateRole">Associate Role</a> assigned to the Associate creating a Business Unit using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *
     *
     * @return null|AssociateRoleKeyReference
     */
    public function getMyBusinessUnitAssociateRoleOnCreation()
    {
        if (is_null($this->myBusinessUnitAssociateRoleOnCreation)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MY_BUSINESS_UNIT_ASSOCIATE_ROLE_ON_CREATION);
            if (is_null($data)) {
                return null;
            }

            $this->myBusinessUnitAssociateRoleOnCreation = AssociateRoleKeyReferenceModel::of($data);
        }

        return $this->myBusinessUnitAssociateRoleOnCreation;
    }


    /**
     * @param ?string $myBusinessUnitStatusOnCreation
     */
    public function setMyBusinessUnitStatusOnCreation(?string $myBusinessUnitStatusOnCreation): void
    {
        $this->myBusinessUnitStatusOnCreation = $myBusinessUnitStatusOnCreation;
    }

    /**
     * @param ?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation
     */
    public function setMyBusinessUnitAssociateRoleOnCreation(?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation): void
    {
        $this->myBusinessUnitAssociateRoleOnCreation = $myBusinessUnitAssociateRoleOnCreation;
    }
}
