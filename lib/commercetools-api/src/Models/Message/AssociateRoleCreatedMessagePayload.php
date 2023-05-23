<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\AssociateRole\AssociateRole;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleCreatedMessagePayload extends MessagePayload
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">AssociateRole</a> that was created.</p>
     *

     * @return null|AssociateRole
     */
    public function getAssociateRole();

    /**
     * @param ?AssociateRole $associateRole
     */
    public function setAssociateRole(?AssociateRole $associateRole): void;
}
