<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleNameChangedMessagePayload>
 */
final class AssociateRoleNameChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**
     * <p>Updated name of the <a href="ctp:api:type:AssociateRole">AssociateRole</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): AssociateRoleNameChangedMessagePayload
    {
        return new AssociateRoleNameChangedMessagePayloadModel(
            $this->name
        );
    }

    public static function of(): AssociateRoleNameChangedMessagePayloadBuilder
    {
        return new self();
    }
}
