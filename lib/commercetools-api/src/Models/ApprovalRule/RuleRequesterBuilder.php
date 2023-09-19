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
 * @implements Builder<RuleRequester>
 */
final class RuleRequesterBuilder implements Builder
{
    /**

     * @var null|AssociateRoleKeyReference|AssociateRoleKeyReferenceBuilder
     */
    private $associateRole;

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Role</a> that an <a href="ctp:api:type">Associate</a> must hold for the Approval Rule to apply to the Orders they create.</p>
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

    public function build(): RuleRequester
    {
        return new RuleRequesterModel(
            $this->associateRole instanceof AssociateRoleKeyReferenceBuilder ? $this->associateRole->build() : $this->associateRole
        );
    }

    public static function of(): RuleRequesterBuilder
    {
        return new self();
    }
}
