<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\KeyReference;
use Commercetools\Import\Models\Common\KeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<ReferenceAttribute>
 */
final class ReferenceAttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $value;

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>References a resource by its key.</p>
     *
     * @return null|KeyReference
     */
    public function getValue()
    {
        return $this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value;
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

    /**
     * @param ?KeyReference $value
     * @return $this
     */
    public function withValue(?KeyReference $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?KeyReferenceBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ReferenceAttribute
    {
        return new ReferenceAttributeModel(
            $this->name,
            $this->value instanceof KeyReferenceBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): ReferenceAttributeBuilder
    {
        return new self();
    }
}
