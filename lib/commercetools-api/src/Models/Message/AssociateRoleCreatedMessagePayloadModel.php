<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\AssociateRole\AssociateRole;
use Commercetools\Api\Models\AssociateRole\AssociateRoleModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateRoleCreatedMessagePayloadModel extends JsonObjectModel implements AssociateRoleCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'AssociateRoleCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?AssociateRole
     */
    protected $associateRole;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRole $associateRole = null,
        ?string $type = null
    ) {
        $this->associateRole = $associateRole;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">AssociateRole</a> that was created.</p>
     *
     *
     * @return null|AssociateRole
     */
    public function getAssociateRole()
    {
        if (is_null($this->associateRole)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE);
            if (is_null($data)) {
                return null;
            }

            $this->associateRole = AssociateRoleModel::of($data);
        }

        return $this->associateRole;
    }


    /**
     * @param ?AssociateRole $associateRole
     */
    public function setAssociateRole(?AssociateRole $associateRole): void
    {
        $this->associateRole = $associateRole;
    }
}
