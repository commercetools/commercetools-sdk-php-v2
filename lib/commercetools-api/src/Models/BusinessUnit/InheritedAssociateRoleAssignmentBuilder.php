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
 * @implements Builder<InheritedAssociateRoleAssignment>
 */
final class InheritedAssociateRoleAssignmentBuilder implements Builder
{
    /**

     * @var null|AssociateRoleKeyReference|AssociateRoleKeyReferenceBuilder
     */
    private $associateRole;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $source;

    /**
     * <p>Inherited role the Associate holds within a Business Unit.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**
     * <p>Reference to the parent Business Unit where the assignment is defined explicitly.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getSource()
    {
        return $this->source instanceof BusinessUnitKeyReferenceBuilder ? $this->source->build() : $this->source;
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
     * @param ?BusinessUnitKeyReference $source
     * @return $this
     */
    public function withSource(?BusinessUnitKeyReference $source)
    {
        $this->source = $source;

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

    /**
     * @deprecated use withSource() instead
     * @return $this
     */
    public function withSourceBuilder(?BusinessUnitKeyReferenceBuilder $source)
    {
        $this->source = $source;

        return $this;
    }

    public function build(): InheritedAssociateRoleAssignment
    {
        return new InheritedAssociateRoleAssignmentModel(
            $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole,
            $this->source instanceof BusinessUnitKeyReferenceBuilder ? $this->source->build() : $this->source
        );
    }

    public static function of(): InheritedAssociateRoleAssignmentBuilder
    {
        return new self();
    }
}
