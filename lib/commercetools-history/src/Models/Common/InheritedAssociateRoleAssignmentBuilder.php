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
 * @implements Builder<InheritedAssociateRoleAssignment>
 */
final class InheritedAssociateRoleAssignmentBuilder implements Builder
{
    /**

     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $associateRole;

    /**

     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $source;

    /**

     * @return null|KeyReference
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof KeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**

     * @return null|KeyReference
     */
    public function getSource()
    {
        return $this->source instanceof KeyReferenceBuilder ? $this->source->build() : $this->source;
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
     * @param ?KeyReference $source
     * @return $this
     */
    public function withSource(?KeyReference $source)
    {
        $this->source = $source;

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

    /**
     * @deprecated use withSource() instead
     * @return $this
     */
    public function withSourceBuilder(?KeyReferenceBuilder $source)
    {
        $this->source = $source;

        return $this;
    }

    public function build(): InheritedAssociateRoleAssignment
    {
        return new InheritedAssociateRoleAssignmentModel(
            $this->associateRole instanceof KeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole,
            $this->source instanceof KeyReferenceBuilder ? $this->source->build() : $this->source
        );
    }

    public static function of(): InheritedAssociateRoleAssignmentBuilder
    {
        return new self();
    }
}
