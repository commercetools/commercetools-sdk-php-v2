<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSetAttributesAction>
 */
final class VariantSetAttributesActionBuilder implements Builder
{
    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Attributes to set for the Variant according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>Whether only the staged attributes are updated. If <code>false</code>, both the current and staged attributes are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): VariantSetAttributesAction
    {
        return new VariantSetAttributesActionModel(
            $this->attributes,
            $this->staged
        );
    }

    public static function of(): VariantSetAttributesActionBuilder
    {
        return new self();
    }
}
