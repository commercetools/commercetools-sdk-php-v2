<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceTier;
use Commercetools\Api\Models\Common\PriceTierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceTierAddedMessagePayloadModel extends JsonObjectModel implements StandalonePriceTierAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceTierAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PriceTier
     */
    protected $tier;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PriceTier $tier = null,
        ?string $type = null
    ) {
        $this->tier = $tier;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The <a href="ctp:api:type:PriceTier">Price Tier</a> that has been added to the array field <code>tiers</code> for the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|PriceTier
     */
    public function getTier()
    {
        if (is_null($this->tier)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TIER);
            if (is_null($data)) {
                return null;
            }

            $this->tier = PriceTierModel::of($data);
        }

        return $this->tier;
    }


    /**
     * @param ?PriceTier $tier
     */
    public function setTier(?PriceTier $tier): void
    {
        $this->tier = $tier;
    }
}
