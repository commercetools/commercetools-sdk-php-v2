<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded AssociateRole. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for AssociateRole.</p>
     *

     * @return null|AssociateRole
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:AssociateRole">AssociateRole</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?AssociateRole $obj
     */
    public function setObj(?AssociateRole $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
