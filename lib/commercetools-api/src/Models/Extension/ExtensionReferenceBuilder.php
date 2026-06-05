<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionReference>
 */
final class ExtensionReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|Extension|ExtensionBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Extension">Extension</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Extension. Only present in responses to requests with <a href="/api/general-concepts#reference-expansion">Reference Expansion</a> for Extensions.</p>
     *

     * @return null|Extension
     */
    public function getObj()
    {
        return $this->obj instanceof ExtensionBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Extension $obj
     * @return $this
     */
    public function withObj(?Extension $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ExtensionBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ExtensionReference
    {
        return new ExtensionReferenceModel(
            $this->id,
            $this->obj instanceof ExtensionBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ExtensionReferenceBuilder
    {
        return new self();
    }
}
