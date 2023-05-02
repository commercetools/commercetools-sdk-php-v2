<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetBusinessUnitAssociateRoleOnCreationAction extends ProjectUpdateAction
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';

    /**
     * <p>Default <a href="ctp:api:type:AssociateRole">Associate Role</a> assigned to the Associate creating a Business Unit using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *

     * @return null|AssociateRoleResourceIdentifier
     */
    public function getAssociateRole();

    /**
     * @param ?AssociateRoleResourceIdentifier $associateRole
     */
    public function setAssociateRole(?AssociateRoleResourceIdentifier $associateRole): void;
}
