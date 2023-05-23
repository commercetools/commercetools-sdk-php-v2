<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

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
final class InheritedAssociateRoleAssignmentModel extends JsonObjectModel implements InheritedAssociateRoleAssignment
{
    /**
     *
     * @var ?AssociateRoleKeyReference
     */
    protected $associateRole;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $source;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleKeyReference $associateRole = null,
        ?BusinessUnitKeyReference $source = null
    ) {
        $this->associateRole = $associateRole;
        $this->source = $source;
    }

    /**
     * <p>Inherited role the Associate holds within a Business Unit.</p>
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
     * <p>Reference to the parent Business Unit where the assignment is defined explicitly.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getSource()
    {
        if (is_null($this->source)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SOURCE);
            if (is_null($data)) {
                return null;
            }

            $this->source = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->source;
    }


    /**
     * @param ?AssociateRoleKeyReference $associateRole
     */
    public function setAssociateRole(?AssociateRoleKeyReference $associateRole): void
    {
        $this->associateRole = $associateRole;
    }

    /**
     * @param ?BusinessUnitKeyReference $source
     */
    public function setSource(?BusinessUnitKeyReference $source): void
    {
        $this->source = $source;
    }
}
