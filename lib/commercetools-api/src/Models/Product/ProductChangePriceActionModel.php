<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductChangePriceActionModel extends JsonObjectModel implements ProductChangePriceAction
{
    public const DISCRIMINATOR_VALUE = 'changePrice';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $priceId;

    /**

     * @var ?EmbeddedPriceDraft
     */
    protected $price;

    /**

     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $priceId = null,
        ?EmbeddedPriceDraft $price = null,
        ?bool $staged = null
    ) {
        $this->priceId = $priceId;
        $this->price = $price;
        $this->staged = $staged;
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
     * <p>The <code>id</code> of the EmbeddedPrice to update.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * <p>Value to set.</p>
     *

     * @return null|EmbeddedPriceDraft
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = EmbeddedPriceDraftModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>If <code>true</code>, only the staged EmbeddedPrice is updated. If <code>false</code>, both the current and staged EmbeddedPrice are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * @param ?EmbeddedPriceDraft $price
     */
    public function setPrice(?EmbeddedPriceDraft $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
