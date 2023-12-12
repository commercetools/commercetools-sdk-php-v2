<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeGroupUpdate>
 */
final class AttributeGroupUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?AttributeGroupUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the AttributeGroup on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the AttributeGroup.</p>
     *

     * @return null|AttributeGroupUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?AttributeGroupUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?AttributeGroupUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): AttributeGroupUpdate
    {
        return new AttributeGroupUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): AttributeGroupUpdateBuilder
    {
        return new self();
    }
}
