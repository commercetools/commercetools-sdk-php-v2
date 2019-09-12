<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;

/**
 * @implements Builder<Attribute>
 */
final class AttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $type;

    public function __construct()
    {
    }

    /**
     * <p>For now we reuse this type in two different context. And that's why the name is required when used in the full import.
     * And why the name isn't required when used in patch.</p>.
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

    public function build(): Attribute
    {
        return new AttributeModel(
            $this->name,
            $this->type
        );
    }

    public static function of(): AttributeBuilder
    {
        return new self();
    }
}
