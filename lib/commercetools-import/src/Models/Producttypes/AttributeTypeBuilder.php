<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeType>
 */
final class AttributeTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): AttributeType
    {
        return new AttributeTypeModel(
            $this->name
        );
    }

    public static function of(): AttributeTypeBuilder
    {
        return new self();
    }
}
