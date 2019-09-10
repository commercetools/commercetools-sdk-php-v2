<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldDateTimeType>
 */
final class CustomFieldDateTimeTypeBuilder implements Builder
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

    public function build(): CustomFieldDateTimeType
    {
        return new CustomFieldDateTimeTypeModel(
            $this->name
        );
    }

    public static function of(): CustomFieldDateTimeTypeBuilder
    {
        return new self();
    }
}
