<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifier;
use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectSetBusinessUnitAssociateRoleOnCreationAction>
 */
final class ProjectSetBusinessUnitAssociateRoleOnCreationActionBuilder implements Builder
{
    /**

     * @var null|AssociateRoleResourceIdentifier|AssociateRoleResourceIdentifierBuilder
     */
    private $associateRole;

    /**
     * <p>Default <a href="ctp:api:type:AssociateRole">Associate Role</a> assigned to the Associate creating a Business Unit using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *

     * @return null|AssociateRoleResourceIdentifier
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleResourceIdentifierBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**
     * @param ?AssociateRoleResourceIdentifier $associateRole
     * @return $this
     */
    public function withAssociateRole(?AssociateRoleResourceIdentifier $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    /**
     * @deprecated use withAssociateRole() instead
     * @return $this
     */
    public function withAssociateRoleBuilder(?AssociateRoleResourceIdentifierBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): ProjectSetBusinessUnitAssociateRoleOnCreationAction
    {
        return new ProjectSetBusinessUnitAssociateRoleOnCreationActionModel(
            $this->associateRole instanceof AssociateRoleResourceIdentifierBuilder ? $this->associateRole->build() : $this->associateRole
        );
    }

    public static function of(): ProjectSetBusinessUnitAssociateRoleOnCreationActionBuilder
    {
        return new self();
    }
}
