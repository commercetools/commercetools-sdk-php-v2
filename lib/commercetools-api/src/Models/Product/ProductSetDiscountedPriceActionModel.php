<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

final class ProductSetDiscountedPriceActionModel extends JsonObjectModel implements ProductSetDiscountedPriceAction
{
    public const DISCRIMINATOR_VALUE = 'setDiscountedPrice';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $priceId;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?DiscountedPrice
     */
    protected $discounted;


    public function __construct(
        string $priceId = null,
        bool $staged = null,
        DiscountedPrice $discounted = null
    ) {
        $this->priceId = $priceId;
        $this->staged = $staged;
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
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetDiscountedPriceAction::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductSetDiscountedPriceAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductSetDiscountedPriceAction::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }

    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }
}
