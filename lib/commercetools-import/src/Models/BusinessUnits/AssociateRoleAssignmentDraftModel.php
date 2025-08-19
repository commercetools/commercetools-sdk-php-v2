<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssociateRoleKeyReference;
use Commercetools\Import\Models\Common\AssociateRoleKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class AssociateRoleAssignmentDraftModel extends JsonObjectModel implements AssociateRoleAssignmentDraft
{
    /**
     *
     * @var ?AssociateRoleKeyReference
     */
    protected $associateRole;

    /**
     *
     * @var ?string
     */
    protected $inheritance;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleKeyReference $associateRole = null,
        ?string $inheritance = null
    ) {
        $this->associateRole = $associateRole;
        $this->inheritance = $inheritance;
    }

    /**
     * <p>The role to assign to the Associate.</p>
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
     * <p>Determines whether the AssociateRole is inherited. If <code>Disabled</code>, the AssociateRole is not inherited from a parent Business Unit.</p>
     *
     *
     * @return null|string
     */
    public function getInheritance()
    {
        if (is_null($this->inheritance)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INHERITANCE);
            if (is_null($data)) {
                return null;
            }
            $this->inheritance = (string) $data;
        }

        return $this->inheritance;
    }


    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void
    {
        $this->associateRole = $associateRole;
    }

    /**
     * @param ?string $inheritance
     */
    public function setInheritance(?string $inheritance): void
    {
        $this->inheritance = $inheritance;
    }
}
