<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RuleApprover extends JsonObject
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';

    /**
     * <p>The Associate Role that is allowed to approve at a given stage in the approval process.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole();

    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void;
}
