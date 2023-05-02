<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

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
final class ProjectSetBusinessUnitAssociateRoleOnCreationActionModel extends JsonObjectModel implements ProjectSetBusinessUnitAssociateRoleOnCreationAction
{
    public const DISCRIMINATOR_VALUE = 'setMyBusinessUnitAssociateRoleOnCreation';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AssociateRoleResourceIdentifier
     */
    protected $associateRole;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleResourceIdentifier $associateRole = null,
        ?string $action = null
    ) {
        $this->associateRole = $associateRole;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Default <a href="ctp:api:type:AssociateRole">Associate Role</a> assigned to the Associate creating a Business Unit using the <a href="ctp:api:endpoint:/{projectKey}/me/business-units:POST">My Business Unit endpoint</a>.</p>
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
