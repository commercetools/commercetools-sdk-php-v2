<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductImageAddedMessagePayloadModel extends JsonObjectModel implements ProductImageAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductImageAdded';
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


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $variantId = null,
        ?Image $image = null,
        ?bool $staged = null
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
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> to which the <a href="ctp:api:type:Image">Image</a> was added.</p>
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
     * <p><a href="ctp:api:type:Image">Image</a> that was added.</p>
     *

     * @return null|Image
     */
    public function getImage()
    {
        if (is_null($this->image)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_IMAGE);
            if (is_null($data)) {
                return null;
            }

            $this->image = ImageModel::of($data);
        }

        return $this->image;
    }

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
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
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?Image $image
     */
    public function setImage(?Image $image): void
    {
        $this->image = $image;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
