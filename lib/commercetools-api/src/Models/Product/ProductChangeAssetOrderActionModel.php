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
final class ProductChangeAssetOrderActionModel extends JsonObjectModel implements ProductChangeAssetOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeAssetOrder';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?array
     */
    protected $assetOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $variantId = null,
        ?string $sku = null,
        ?bool $staged = null,
        ?array $assetOrder = null,
        ?string $action = null
    ) {
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->staged = $staged;
        $this->assetOrder = $assetOrder;
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
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *
     *
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>assets</code> is updated. If <code>false</code>, both the current and staged <code>assets</code> are updated.</p>
     *
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
     * <p>All existing Asset <code>id</code>s of the ProductVariant in the desired new order.</p>
     *
     *
     * @return null|array
     */
    public function getAssetOrder()
    {
        if (is_null($this->assetOrder)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ASSET_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->assetOrder = $data;
        }

        return $this->assetOrder;
    }


    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?array $assetOrder
     */
    public function setAssetOrder(?array $assetOrder): void
    {
        $this->assetOrder = $assetOrder;
    }
}
