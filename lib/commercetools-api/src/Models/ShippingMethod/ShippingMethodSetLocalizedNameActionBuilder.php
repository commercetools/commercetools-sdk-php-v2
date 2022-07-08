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
 * @implements Builder<ShippingMethodSetLocalizedNameAction>
 */
final class ShippingMethodSetLocalizedNameActionBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedName;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|LocalizedString
     */
    public function getLocalizedName()
    {
        return $this->localizedName instanceof LocalizedStringBuilder ? $this->localizedName->build() : $this->localizedName;
    }

    /**
     * @param ?LocalizedString $localizedName
     * @return $this
     */
    public function withLocalizedName(?LocalizedString $localizedName)
    {
        $this->localizedName = $localizedName;

        return $this;
    }

    /**
     * @deprecated use withLocalizedName() instead
     * @return $this
     */
    public function withLocalizedNameBuilder(?LocalizedStringBuilder $localizedName)
    {
        $this->localizedName = $localizedName;

        return $this;
    }

    public function build(): ShippingMethodSetLocalizedNameAction
    {
        return new ShippingMethodSetLocalizedNameActionModel(
            $this->localizedName instanceof LocalizedStringBuilder ? $this->localizedName->build() : $this->localizedName
        );
    }

    public static function of(): ShippingMethodSetLocalizedNameActionBuilder
    {
        return new self();
    }
}
