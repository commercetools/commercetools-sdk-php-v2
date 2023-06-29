<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateRoleAssignmentModel extends JsonObjectModel implements AssociateRoleAssignment
{


    /**
     *
     * @var ?KeyReference
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
        ?KeyReference $associateRole = null,
        ?string $inheritance = null
    ) {
        $this->associateRole = $associateRole;
        $this->inheritance = $inheritance;

    }

    /**
     *
     * @return null|KeyReference
     */
    public function getAssociateRole()
    {
        if (is_null($this->associateRole)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE);
            if (is_null($data)) {
                return null;
            }

            $this->associateRole = KeyReferenceModel::of($data);
        }

        return $this->associateRole;
    }

    /**
     * <p>Determines whether an <a href="ctp:api:type:AssociateRoleAssignment">AssociateRoleAssignment</a> can be inherited by child Business Units.</p>
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
     * @param ?KeyReference $associateRole
     */
    public function setAssociateRole(?KeyReference $associateRole): void
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
