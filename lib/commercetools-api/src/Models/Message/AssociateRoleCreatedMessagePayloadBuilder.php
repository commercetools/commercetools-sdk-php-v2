<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\AssociateRole\AssociateRole;
use Commercetools\Api\Models\AssociateRole\AssociateRoleBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleCreatedMessagePayload>
 */
final class AssociateRoleCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|AssociateRole|AssociateRoleBuilder
     */
    private $associateRole;

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">AssociateRole</a> that was created.</p>
     *

     * @return null|AssociateRole
     */
    public function getAssociateRole()
    {
        return $this->associateRole instanceof AssociateRoleBuilder ? $this->associateRole->build() : $this->associateRole;
    }

    /**
     * @param ?AssociateRole $associateRole
     * @return $this
     */
    public function withAssociateRole(?AssociateRole $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    /**
     * @deprecated use withAssociateRole() instead
     * @return $this
     */
    public function withAssociateRoleBuilder(?AssociateRoleBuilder $associateRole)
    {
        $this->associateRole = $associateRole;

        return $this;
    }

    public function build(): AssociateRoleCreatedMessagePayload
    {
        return new AssociateRoleCreatedMessagePayloadModel(
            $this->associateRole instanceof AssociateRoleBuilder ? $this->associateRole->build() : $this->associateRole
        );
    }

    public static function of(): AssociateRoleCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
