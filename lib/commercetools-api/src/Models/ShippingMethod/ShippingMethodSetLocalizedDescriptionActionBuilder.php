<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
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
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedDescription;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|LocalizedString
     */
    public function getLocalizedDescription()
    {
        return $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription;
    }

    /**
     * @param ?LocalizedString $localizedDescription
     * @return $this
     */
    public function withLocalizedDescription(?LocalizedString $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    /**
     * @deprecated use withLocalizedDescription() instead
     * @return $this
     */
    public function withLocalizedDescriptionBuilder(?LocalizedStringBuilder $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    public function build(): ShippingMethodSetLocalizedDescriptionAction
    {
        return new ShippingMethodSetLocalizedDescriptionActionModel(
            $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription
        );
    }

    public static function of(): ShippingMethodSetLocalizedDescriptionActionBuilder
    {
        return new self();
    }
}
