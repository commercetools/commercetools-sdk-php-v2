<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RuleApprover>
 */
final class RuleApproverBuilder implements Builder
{
    /**

     * @var null|AssociateRoleKeyReference|AssociateRoleKeyReferenceBuilder
     */
    private $associateRole;

    /**
     * <p>The Associate Role that is allowed to approve at a given stage in the approval process.</p>
     *

     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole;
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
     * @deprecated use withAssociateRole() instead
     * @return $this
     */
    public function withAssociateRoleBuilder(?AssociateRoleKeyReferenceBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): RuleApprover
    {
        return new RuleApproverModel(
            $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole
        );
    }

    public static function of(): RuleApproverBuilder
    {
        return new self();
    }
}
