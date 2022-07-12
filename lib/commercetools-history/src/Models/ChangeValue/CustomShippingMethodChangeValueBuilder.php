<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomShippingMethodChangeValue>
 */
final class CustomShippingMethodChangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
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


    public function build(): CustomShippingMethodChangeValue
    {
        return new CustomShippingMethodChangeValueModel(
            $this->name
        );
    }

    public static function of(): CustomShippingMethodChangeValueBuilder
    {
        return new self();
    }
}
