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

interface RuleRequester extends JsonObject
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Role</a> that an <a href="ctp:api:type">Associate</a> must hold for the Approval Rule to apply to the Orders they create.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole();

    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void;
}
