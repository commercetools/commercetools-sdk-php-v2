<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeBooleanType>
 */
final class AttributeBooleanTypeBuilder implements Builder
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

    public function build(): AttributeBooleanType
    {
        return new AttributeBooleanTypeModel(
            $this->name
        );
    }

    public static function of(): AttributeBooleanTypeBuilder
    {
        return new self();
    }
}
