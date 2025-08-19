<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AssociateRoleKeyReference;

interface AssociateRoleAssignmentDraft extends JsonObject
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';
    public const FIELD_INHERITANCE = 'inheritance';

    /**
     * <p>The role to assign to the Associate.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole();

    /**
     * <p>Determines whether the AssociateRole is inherited. If <code>Disabled</code>, the AssociateRole is not inherited from a parent Business Unit.</p>
     *

     * @return null|string
     */
    public function getInheritance();

    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void;

    /**
     * @param ?string $inheritance
     */
    public function setInheritance(?string $inheritance): void;
}
