<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\PriceTierDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceSetPriceTiersActionModel extends JsonObjectModel implements StandalonePriceSetPriceTiersAction
{
    public const DISCRIMINATOR_VALUE = 'setPriceTier';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?PriceTierDraftCollection
     */
    protected $tiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PriceTierDraftCollection $tiers = null,
        ?string $action = null
    ) {
        $this->tiers = $tiers;
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
     * <p>Value to set. If empty, any existing value will be removed.
     * The <code>minimumQuantity</code> of the PriceTiers must be unique and greater than <code>1</code>, otherwise an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *
     *
     * @return null|PriceTierDraftCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = PriceTierDraftCollection::fromArray($data);
        }

        return $this->tiers;
    }


    /**
     * @param ?PriceTierDraftCollection $tiers
     */
    public function setTiers(?PriceTierDraftCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
}
