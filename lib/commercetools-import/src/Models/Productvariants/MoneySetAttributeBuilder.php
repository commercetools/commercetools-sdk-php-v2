<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\MoneyCollection;

/**
 * @implements Builder<MoneySetAttribute>
 */
final class MoneySetAttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?MoneyCollection
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|MoneyCollection
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
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?MoneyCollection $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): MoneySetAttribute
    {
        return new MoneySetAttributeModel(
            $this->name,
            $this->type,
            $this->value
        );
    }

    public static function of(): MoneySetAttributeBuilder
    {
        return new self();
    }
}
