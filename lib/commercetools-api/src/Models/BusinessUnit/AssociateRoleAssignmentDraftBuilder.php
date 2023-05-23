<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifier;
use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleAssignmentDraft>
 */
final class AssociateRoleAssignmentDraftBuilder implements Builder
{
    /**

     * @var null|AssociateRoleResourceIdentifier|AssociateRoleResourceIdentifierBuilder
     */
    private $associateRole;

    /**

     * @var ?string
     */
    private $inheritance;

    /**
     * <p>Role the Associate holds within a Business Unit.</p>
     *

     * @return null|AssociateRoleResourceIdentifier
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleResourceIdentifierBuilder ? $this->associateRole->build() : $this->associateRole;
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
     * @param ?AssociateRoleResourceIdentifier $associateRole
     * @return $this
     */
    public function withAssociateRole(?AssociateRoleResourceIdentifier $associateRole)
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
    public function withAssociateRoleBuilder(?AssociateRoleResourceIdentifierBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): AssociateRoleAssignmentDraft
    {
        return new AssociateRoleAssignmentDraftModel(
            $this->associateRole instanceof AssociateRoleResourceIdentifierBuilder ? $this->associateRole->build() : $this->associateRole,
            $this->inheritance
        );
    }

    public static function of(): AssociateRoleAssignmentDraftBuilder
    {
        return new self();
    }
}
