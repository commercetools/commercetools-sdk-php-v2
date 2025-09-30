<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountsConfigurationModel extends JsonObjectModel implements DiscountsConfiguration
{
    /**
     *
     * @var ?string
     */
    protected $discountCombinationMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $discountCombinationMode = null
    ) {
        $this->discountCombinationMode = $discountCombinationMode;
    }

    /**
     * <p>Indicates how Product Discounts and Cart Discounts should be combined. Default value is <code>Stacking</code>.</p>
     *
     *
     * @return null|string
     */
    public function getDiscountCombinationMode()
    {
        if (is_null($this->discountCombinationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DISCOUNT_COMBINATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->discountCombinationMode = (string) $data;
        }

        return $this->discountCombinationMode;
    }


    /**
     * @param ?string $discountCombinationMode
     */
    public function setDiscountCombinationMode(?string $discountCombinationMode): void
    {
        $this->discountCombinationMode = $discountCombinationMode;
    }
}
