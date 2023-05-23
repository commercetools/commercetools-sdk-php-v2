<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitConfiguration>
 */
final class BusinessUnitConfigurationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $myBusinessUnitStatusOnCreation;

    /**

     * @var null|AssociateRoleKeyReference|AssociateRoleKeyReferenceBuilder
     */
    private $myBusinessUnitAssociateRoleOnCreation;

    /**
     * <p>Status of Business Units created using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *

     * @return null|string
     */
    public function getMyBusinessUnitStatusOnCreation()
    {
        return $this->myBusinessUnitStatusOnCreation;
    }

    /**
     * <p>Default <a href="ctp:api:type:AssociateRole">Associate Role</a> assigned to the Associate creating a Business Unit using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getMyBusinessUnitAssociateRoleOnCreation()
    {
        return $this->myBusinessUnitAssociateRoleOnCreation instanceof AssociateRoleKeyReferenceBuilder ? $this->myBusinessUnitAssociateRoleOnCreation->build() : $this->myBusinessUnitAssociateRoleOnCreation;
    }

    /**
     * @param ?string $myBusinessUnitStatusOnCreation
     * @return $this
     */
    public function withMyBusinessUnitStatusOnCreation(?string $myBusinessUnitStatusOnCreation)
    {
        $this->myBusinessUnitStatusOnCreation = $myBusinessUnitStatusOnCreation;

        return $this;
    }

    /**
     * @param ?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation
     * @return $this
     */
    public function withMyBusinessUnitAssociateRoleOnCreation(?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation)
    {
        $this->myBusinessUnitAssociateRoleOnCreation = $myBusinessUnitAssociateRoleOnCreation;

        return $this;
    }

    /**
     * @deprecated use withMyBusinessUnitAssociateRoleOnCreation() instead
     * @return $this
     */
    public function withMyBusinessUnitAssociateRoleOnCreationBuilder(?AssociateRoleKeyReferenceBuilder $myBusinessUnitAssociateRoleOnCreation)
    {
        $this->myBusinessUnitAssociateRoleOnCreation = $myBusinessUnitAssociateRoleOnCreation;

        return $this;
    }

    public function build(): BusinessUnitConfiguration
    {
        return new BusinessUnitConfigurationModel(
            $this->myBusinessUnitStatusOnCreation,
            $this->myBusinessUnitAssociateRoleOnCreation instanceof AssociateRoleKeyReferenceBuilder ? $this->myBusinessUnitAssociateRoleOnCreation->build() : $this->myBusinessUnitAssociateRoleOnCreation
        );
    }

    public static function of(): BusinessUnitConfigurationBuilder
    {
        return new self();
    }
}
