<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifier;
use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RuleApproverDraft>
 */
final class RuleApproverDraftBuilder implements Builder
{
    /**

     * @var null|AssociateRoleResourceIdentifier|AssociateRoleResourceIdentifierBuilder
     */
    private $associateRole;

    /**
     * <p>Any Associate with this Role can approve.</p>
     *

     * @return null|AssociateRoleResourceIdentifier
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleResourceIdentifierBuilder ? $this->associateRole->build() : $this->associateRole;
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
     * @deprecated use withAssociateRole() instead
     * @return $this
     */
    public function withAssociateRoleBuilder(?AssociateRoleResourceIdentifierBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): RuleApproverDraft
    {
        return new RuleApproverDraftModel(
            $this->associateRole instanceof AssociateRoleResourceIdentifierBuilder ? $this->associateRole->build() : $this->associateRole
        );
    }

    public static function of(): RuleApproverDraftBuilder
    {
        return new self();
    }
}
