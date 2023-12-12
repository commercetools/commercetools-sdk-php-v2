<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifier;
use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RuleRequesterDraftModel extends JsonObjectModel implements RuleRequesterDraft
{
    /**
     *
     * @var ?AssociateRoleResourceIdentifier
     */
    protected $associateRole;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleResourceIdentifier $associateRole = null
    ) {
        $this->associateRole = $associateRole;
    }

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Role</a> that an <a href="ctp:api:type">Associate</a> must hold for the Approval Rule to apply to the Orders they create.</p>
     *
     *
     * @return null|AssociateRoleResourceIdentifier
     */
    public function getAssociateRole()
    {
        if (is_null($this->associateRole)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE);
            if (is_null($data)) {
                return null;
            }

            $this->associateRole = AssociateRoleResourceIdentifierModel::of($data);
        }

        return $this->associateRole;
    }


    /**
     * @param ?AssociateRoleResourceIdentifier $associateRole
     */
    public function setAssociateRole(?AssociateRoleResourceIdentifier $associateRole): void
    {
        $this->associateRole = $associateRole;
    }
}
