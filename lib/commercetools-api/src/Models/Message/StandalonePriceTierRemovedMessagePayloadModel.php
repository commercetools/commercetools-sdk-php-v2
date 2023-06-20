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
final class StandalonePriceTierRemovedMessagePayloadModel extends JsonObjectModel implements StandalonePriceTierRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceTierRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PriceTier
     */
    protected $removedTier;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PriceTier $removedTier = null,
        ?string $type = null
    ) {
        $this->removedTier = $removedTier;
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
     * <p>The <a href="ctp:api:type:PriceTier">Price Tier</a> that has been removed from the array field <code>tiers</code> for the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|PriceTier
     */
    public function getRemovedTier()
    {
        if (is_null($this->removedTier)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REMOVED_TIER);
            if (is_null($data)) {
                return null;
            }

            $this->removedTier = PriceTierModel::of($data);
        }

        return $this->removedTier;
    }


    /**
     * @param ?PriceTier $removedTier
     */
    public function setRemovedTier(?PriceTier $removedTier): void
    {
        $this->removedTier = $removedTier;
    }
}
