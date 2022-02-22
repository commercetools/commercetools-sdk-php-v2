<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartClassificationType>
 */
final class CartClassificationTypeBuilder implements Builder
{
    /**
     * @var ?CustomFieldLocalizedEnumValueCollection
     */
    private $values;

    /**
     * <p>The classification items that can be used for specifiying any <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     *
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ?CustomFieldLocalizedEnumValueCollection $values
     * @return $this
     */
    public function withValues(?CustomFieldLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }


    public function build(): CartClassificationType
    {
        return new CartClassificationTypeModel(
            $this->values
        );
    }

    public static function of(): CartClassificationTypeBuilder
    {
        return new self();
    }
}
