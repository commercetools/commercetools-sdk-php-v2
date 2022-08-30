<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantDeletedMessagePayloadModel extends JsonObjectModel implements ProductVariantDeletedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductVariantDeleted';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ProductVariant
     */
    protected $variant;

    /**
     *
     * @var ?array
     */
    protected $removedImageUrls;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductVariant $variant = null,
        ?array $removedImageUrls = null,
        ?string $type = null
    ) {
        $this->variant = $variant;
        $this->removedImageUrls = $removedImageUrls;
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
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> that was added.</p>
     *
     *
     * @return null|ProductVariant
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->variant = ProductVariantModel::of($data);
        }

        return $this->variant;
    }

    /**
     * <p>List of image URLs that were removed with the <a href="ctp:api:type:ProductRemoveVariantAction">Remove Product Variant</a> update action.</p>
     *
     *
     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_REMOVED_IMAGE_URLS);
            if (is_null($data)) {
                return null;
            }
            $this->removedImageUrls = $data;
        }

        return $this->removedImageUrls;
    }


    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }
}
