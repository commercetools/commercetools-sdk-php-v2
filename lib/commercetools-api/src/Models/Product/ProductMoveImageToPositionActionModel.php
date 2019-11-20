<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductMoveImageToPositionActionModel extends JsonObjectModel implements ProductMoveImageToPositionAction
{
    const DISCRIMINATOR_VALUE = 'moveImageToPosition';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $imageUrl;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?int
     */
    protected $position;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?string
     */
    protected $sku;

    public function __construct(
        string $imageUrl = null,
        bool $staged = null,
        int $position = null,
        int $variantId = null,
        string $sku = null
    ) {
        $this->imageUrl = $imageUrl;
        $this->staged = $staged;
        $this->position = $position;
        $this->variantId = $variantId;
        $this->sku = $sku;
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
    public function getImageUrl()
    {
        if (is_null($this->imageUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductMoveImageToPositionAction::FIELD_IMAGE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->imageUrl = (string) $data;
        }

        return $this->imageUrl;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductMoveImageToPositionAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|int
     */
    public function getPosition()
    {
        if (is_null($this->position)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductMoveImageToPositionAction::FIELD_POSITION);
            if (is_null($data)) {
                return null;
            }
            $this->position = (int) $data;
        }

        return $this->position;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductMoveImageToPositionAction::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductMoveImageToPositionAction::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
}
