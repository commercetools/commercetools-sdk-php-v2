<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateReference>
 */
final class StateReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|State|StateBuilder
     */
    private $obj;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|State
     */
    public function getObj()
    {
        return $this->obj instanceof StateBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?State $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?StateBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): StateReference
    {
        return new StateReferenceModel(
            $this->id,
            $this->obj instanceof StateBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): StateReferenceBuilder
    {
        return new self();
    }
}
