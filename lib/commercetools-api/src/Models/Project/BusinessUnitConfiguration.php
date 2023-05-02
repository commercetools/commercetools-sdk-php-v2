<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitConfiguration extends JsonObject
{
    public const FIELD_MY_BUSINESS_UNIT_STATUS_ON_CREATION = 'myBusinessUnitStatusOnCreation';
    public const FIELD_MY_BUSINESS_UNIT_ASSOCIATE_ROLE_ON_CREATION = 'myBusinessUnitAssociateRoleOnCreation';

    /**
     * <p>Status of Business Units created using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *

     * @return null|string
     */
    public function getMyBusinessUnitStatusOnCreation();

    /**
     * <p>Default <a href="ctp:api:type:AssociateRole">Associate Role</a> assigned to the Associate creating a Business Unit using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getMyBusinessUnitAssociateRoleOnCreation();

    /**
     * @param ?string $myBusinessUnitStatusOnCreation
     */
    public function setMyBusinessUnitStatusOnCreation(?string $myBusinessUnitStatusOnCreation): void;

    /**
     * @param ?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation
     */
    public function setMyBusinessUnitAssociateRoleOnCreation(?AssociateRoleKeyReference $myBusinessUnitAssociateRoleOnCreation): void;
}
