<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTailoringAddVariantActionModel extends JsonObjectModel implements ProductTailoringAddVariantAction
{
    public const DISCRIMINATOR_VALUE = 'addVariant';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?ImageCollection
     */
    protected $images;

    /**
     *
     * @var ?AssetDraftCollection
     */
    protected $assets;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $id = null,
        ?string $sku = null,
        ?ImageCollection $images = null,
        ?AssetDraftCollection $assets = null,
        ?bool $staged = null,
        ?string $action = null
    ) {
        $this->id = $id;
        $this->sku = $sku;
        $this->images = $images;
        $this->assets = $assets;
        $this->staged = $staged;
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
     * <p>The <code>id</code> of the tailored ProductVariant to update.</p>
     *
     *
     * @return null|int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (int) $data;
        }

        return $this->id;
    }

    /**
     * <p>The <code>sku</code> of the tailored ProductVariant to update.</p>
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
     * <p>Images for the Product Variant Tailoring.</p>
     *
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * <p>Media assets for the Product Variant Tailoring.</p>
     *
     *
     * @return null|AssetDraftCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetDraftCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * <p>If <code>true</code> the new Product Variant Tailoring is only staged. If <code>false</code> the new Product Variant Tailoring is both current and staged.</p>
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
     * @param ?int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    /**
     * @param ?AssetDraftCollection $assets
     */
    public function setAssets(?AssetDraftCollection $assets): void
    {
        $this->assets = $assets;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
