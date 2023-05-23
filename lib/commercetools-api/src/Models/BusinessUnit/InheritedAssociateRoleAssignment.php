<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InheritedAssociateRoleAssignment extends JsonObject
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';
    public const FIELD_SOURCE = 'source';

    /**
     * <p>Inherited role the Associate holds within a Business Unit.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole();

    /**
     * <p>Reference to the parent Business Unit where the assignment is defined explicitly.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getSource();

    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void;

    /**
     * @param ?BusinessUnitKeyReference $source
     */
    public function setSource(?BusinessUnitKeyReference $source): void;
}
