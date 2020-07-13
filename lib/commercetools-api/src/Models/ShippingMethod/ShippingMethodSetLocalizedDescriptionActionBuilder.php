<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodSetLocalizedDescriptionAction>
 */
final class ShippingMethodSetLocalizedDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $localizedDescription;

    /**
     * @return null|string
     */
    public function getLocalizedDescription()
    {
        return $this->localizedDescription;
    }

    /**
     * @param ?string $localizedDescription
     * @return $this
     */
    public function withLocalizedDescription(?string $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }


    public function build(): ShippingMethodSetLocalizedDescriptionAction
    {
        return new ShippingMethodSetLocalizedDescriptionActionModel(
            $this->localizedDescription
        );
    }

    public static function of(): ShippingMethodSetLocalizedDescriptionActionBuilder
    {
        return new self();
    }
}
