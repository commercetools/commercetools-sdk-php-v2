<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceTiersSetMessagePayloadModel extends JsonObjectModel implements StandalonePriceTiersSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceTiersSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PriceTierCollection
     */
    protected $tiers;

    /**
     *
     * @var ?PriceTierCollection
     */
    protected $previousTiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PriceTierCollection $tiers = null,
        ?PriceTierCollection $previousTiers = null,
        ?string $type = null
    ) {
        $this->tiers = $tiers;
        $this->previousTiers = $previousTiers;
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
     * <p>The updated content of the field <code>tiers</code> of the affected <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|PriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = PriceTierCollection::fromArray($data);
        }

        return $this->tiers;
    }

    /**
     * <p>The previous content of the field <code>tiers</code> of the affected <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *
     *
     * @return null|PriceTierCollection
     */
    public function getPreviousTiers()
    {
        if (is_null($this->previousTiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->previousTiers = PriceTierCollection::fromArray($data);
        }

        return $this->previousTiers;
    }


    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }

    /**
     * @param ?PriceTierCollection $previousTiers
     */
    public function setPreviousTiers(?PriceTierCollection $previousTiers): void
    {
        $this->previousTiers = $previousTiers;
    }
}
