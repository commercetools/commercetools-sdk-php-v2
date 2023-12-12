<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReference;
use Commercetools\Api\Models\AssociateRole\AssociateRoleKeyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RuleApproverModel extends JsonObjectModel implements RuleApprover
{
    /**
     *
     * @var ?AssociateRoleKeyReference
     */
    protected $associateRole;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleKeyReference $associateRole = null
    ) {
        $this->associateRole = $associateRole;
    }

    /**
     * <p>The Associate Role that is allowed to approve at a given stage in the approval process.</p>
     *
     *
     * @return null|AssociateRoleKeyReference
     */
    public function getAssociateRole()
    {
        if (is_null($this->associateRole)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE);
            if (is_null($data)) {
                return null;
            }

            $this->associateRole = AssociateRoleKeyReferenceModel::of($data);
        }

        return $this->associateRole;
    }


    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void
    {
        $this->associateRole = $associateRole;
    }
}
