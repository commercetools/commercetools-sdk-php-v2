<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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

     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $associateRole;

    /**

     * @var ?string
     */
    private $inheritance;

    /**

     * @return null|KeyReference
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof KeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**
     * <p>Determines whether an <a href="ctp:api:type:AssociateRoleAssignment">AssociateRoleAssignment</a> can be inherited by child Business Units.</p>
     *

     * @return null|string
     */
    public function getInheritance()
    {
        return $this->inheritance;
    }

    /**
     * @param ?KeyReference $associateRole
     * @return $this
     */
    public function withAssociateRole(?KeyReference $associateRole)
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
    public function withAssociateRoleBuilder(?KeyReferenceBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): AssociateRoleAssignment
    {
        return new AssociateRoleAssignmentModel(
            $this->associateRole instanceof KeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole,
            $this->inheritance
        );
    }

    public static function of(): AssociateRoleAssignmentBuilder
    {
        return new self();
    }
}
