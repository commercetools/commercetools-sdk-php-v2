<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceExternalDiscountSetMessagePayloadModel extends JsonObjectModel implements StandalonePriceExternalDiscountSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceExternalDiscountSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DiscountedPrice
     */
    protected $discounted;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountedPrice $discounted = null,
        ?string $type = null
    ) {
        $this->discounted = $discounted;
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
     * <p>The <code>discounted</code> value of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> after the <a href="ctp:api:type:StandalonePriceSetDiscountedPriceAction">Set Discounted Price</a> update action.</p>
     *
     *
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }


    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }
}
