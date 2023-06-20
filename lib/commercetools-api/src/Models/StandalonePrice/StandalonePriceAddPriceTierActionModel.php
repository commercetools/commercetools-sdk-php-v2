<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\PriceTierDraft;
use Commercetools\Api\Models\Common\PriceTierDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceAddPriceTierActionModel extends JsonObjectModel implements StandalonePriceAddPriceTierAction
{
    public const DISCRIMINATOR_VALUE = 'addPriceTier';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?PriceTierDraft
     */
    protected $tier;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PriceTierDraft $tier = null,
        ?string $action = null
    ) {
        $this->tier = $tier;
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
     * <p>The <a href="ctp:api:type:PriceTier">PriceTier</a> to be added to the <code>tiers</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.
     * The action returns an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error in the following cases:</p>
     * <ul>
     * <li>Trying to add a PriceTier with <code>minimumQuantity</code> &lt; <code>2</code>.</li>
     * <li>Trying to add a PriceTier with <code>minimumQuantity</code> that already exists for the StandalonePrice.</li>
     * </ul>
     *
     *
     * @return null|PriceTierDraft
     */
    public function getTier()
    {
        if (is_null($this->tier)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TIER);
            if (is_null($data)) {
                return null;
            }

            $this->tier = PriceTierDraftModel::of($data);
        }

        return $this->tier;
    }


    /**
     * @param ?PriceTierDraft $tier
     */
    public function setTier(?PriceTierDraft $tier): void
    {
        $this->tier = $tier;
    }
}
