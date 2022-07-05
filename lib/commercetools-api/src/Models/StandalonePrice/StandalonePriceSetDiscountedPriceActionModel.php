<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Api\Models\Common\DiscountedPriceDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceSetDiscountedPriceActionModel extends JsonObjectModel implements StandalonePriceSetDiscountedPriceAction
{
    public const DISCRIMINATOR_VALUE = 'setDiscountedPrice';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?DiscountedPriceDraft
     */
    protected $discounted;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountedPriceDraft $discounted = null
    ) {
        $this->discounted = $discounted;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceDraftModel::of($data);
        }

        return $this->discounted;
    }


    /**
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void
    {
        $this->discounted = $discounted;
    }
}
