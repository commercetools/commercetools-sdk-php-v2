<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeTextType>
 */
final class AttributeTextTypeBuilder implements Builder
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

    public function build(): AttributeTextType
    {
        return new AttributeTextTypeModel(
            $this->name
        );
    }

    public static function of(): AttributeTextTypeBuilder
    {
        return new self();
    }
}
