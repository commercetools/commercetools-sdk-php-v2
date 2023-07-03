<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceRemovePriceTierActionModel extends JsonObjectModel implements StandalonePriceRemovePriceTierAction
{
    public const DISCRIMINATOR_VALUE = 'removePriceTier';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $tierMinimumQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $tierMinimumQuantity = null,
        ?string $action = null
    ) {
        $this->tierMinimumQuantity = $tierMinimumQuantity;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The <code>minimumQuantity</code> of the <a href="ctp:api:type:PriceTier">PriceTier</a> to be removed from the <code>tiers</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|int
     */
    public function getTierMinimumQuantity()
    {
        if (is_null($this->tierMinimumQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TIER_MINIMUM_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->tierMinimumQuantity = (int) $data;
        }

        return $this->tierMinimumQuantity;
    }


    /**
     * @param ?int $tierMinimumQuantity
     */
    public function setTierMinimumQuantity(?int $tierMinimumQuantity): void
    {
        $this->tierMinimumQuantity = $tierMinimumQuantity;
    }
}
