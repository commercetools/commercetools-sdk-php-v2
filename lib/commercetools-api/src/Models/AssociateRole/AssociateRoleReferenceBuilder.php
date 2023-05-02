<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleReference>
 */
final class AssociateRoleReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|AssociateRole|AssociateRoleBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:AssociateRole">AssociateRole</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded AssociateRole. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for AssociateRole.</p>
     *

     * @return null|AssociateRole
     */
    public function getObj()
    {
        return $this->obj instanceof AssociateRoleBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?AssociateRole $obj
     * @return $this
     */
    public function withObj(?AssociateRole $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?AssociateRoleBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): AssociateRoleReference
    {
        return new AssociateRoleReferenceModel(
            $this->id,
            $this->obj instanceof AssociateRoleBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): AssociateRoleReferenceBuilder
    {
        return new self();
    }
}
