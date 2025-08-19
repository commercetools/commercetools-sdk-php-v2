<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssociateRoleKeyReference;
use Commercetools\Import\Models\Common\AssociateRoleKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<AssociateRoleAssignmentDraft>
 */
final class AssociateRoleAssignmentDraftBuilder implements Builder
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
     * <p>The role to assign to the Associate.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**
     * <p>Determines whether the AssociateRole is inherited. If <code>Disabled</code>, the AssociateRole is not inherited from a parent Business Unit.</p>
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

    public function build(): AssociateRoleAssignmentDraft
    {
        return new AssociateRoleAssignmentDraftModel(
            $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole,
            $this->inheritance
        );
    }

    public static function of(): AssociateRoleAssignmentDraftBuilder
    {
        return new self();
    }
}
