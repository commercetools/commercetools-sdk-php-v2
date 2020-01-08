<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductImageAddedMessagePayloadModel extends JsonObjectModel implements ProductImageAddedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductImageAdded';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?Image
     */
    protected $image;

    /**
     * @var ?bool
     */
    protected $staged;

    public function __construct(
        int $variantId = null,
        Image $image = null,
        bool $staged = null
    ) {
        $this->variantId = $variantId;
        $this->image = $image;
        $this->staged = $staged;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductImageAddedMessagePayload::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|Image
     */
    public function getImage()
    {
        if (is_null($this->image)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImageAddedMessagePayload::FIELD_IMAGE);
            if (is_null($data)) {
                return null;
            }

            $this->image = ImageModel::of($data);
        }

        return $this->image;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductImageAddedMessagePayload::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setImage(?Image $image): void
    {
        $this->image = $image;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
