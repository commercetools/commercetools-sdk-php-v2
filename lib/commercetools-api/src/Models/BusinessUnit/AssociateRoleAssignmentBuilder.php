<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleAssignment>
 */
final class AssociateRoleAssignmentBuilder implements Builder
{
    /**

     * @var null|AssociateRoleKeyReference|AssociateRoleKeyReferenceBuilder
     */
    private $associateRole;

    /**

     * @var ?string
     */
    private $inheritance;

    /**
     * <p>Role the Associate holds within a Business Unit.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**
     * <p>Determines whether the AssociateRoleAssignment can be inherited by child Business Units.</p>
     *

     * @return null|string
     */
    public function getInheritance()
    {
        return $this->inheritance;
    }

    /**
     * @param ?AssociateRoleKeyReference $associateRole
     * @return $this
     */
    public function withAssociateRole(?AssociateRoleKeyReference $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    /**
     * @param ?string $inheritance
     * @return $this
     */
    public function withInheritance(?string $inheritance)
    {
        $this->inheritance = $inheritance;

        return $this;
    }

    /**
     * @deprecated use withAssociateRole() instead
     * @return $this
     */
    public function withAssociateRoleBuilder(?AssociateRoleKeyReferenceBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): AssociateRoleAssignment
    {
        return new AssociateRoleAssignmentModel(
            $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole,
            $this->inheritance
        );
    }

    public static function of(): AssociateRoleAssignmentBuilder
    {
        return new self();
    }
}
