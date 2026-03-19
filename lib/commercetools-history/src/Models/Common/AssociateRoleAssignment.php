<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AssociateRoleAssignment extends JsonObject
{

    public const FIELD_ASSOCIATE_ROLE = 'associateRole';
    public const FIELD_INHERITANCE = 'inheritance';

    /**
     * <p>Role the Associate holds within a Business Unit.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole();

    /**
     * <p>Determines whether the AssociateRoleAssignment can be inherited by child Business Units.</p>
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
