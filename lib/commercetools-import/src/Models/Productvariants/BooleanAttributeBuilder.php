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
use stdClass;

/**
 * @implements Builder<BooleanAttribute>
 */
final class BooleanAttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?bool
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
     * @return null|bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?bool $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): BooleanAttribute
    {
        return new BooleanAttributeModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): BooleanAttributeBuilder
    {
        return new self();
    }
}
