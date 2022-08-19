<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductDeletedMessagePayloadModel extends JsonObjectModel implements ProductDeletedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductDeleted';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?array
     */
    protected $removedImageUrls;

    /**

     * @var ?ProductProjection
     */
    protected $currentProjection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $removedImageUrls = null,
        ?ProductProjection $currentProjection = null
    ) {
        $this->removedImageUrls = $removedImageUrls;
        $this->currentProjection = $currentProjection;
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
     * <p>List of image URLs that were removed during the <a href="ctp:api:type:Product">Delete Product</a> request.</p>
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
     * <p>Current <a href="ctp:api:type:ProductProjection">Product Projection</a> of the deleted <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductProjection
     */
    public function getCurrentProjection()
    {
        if (is_null($this->currentProjection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CURRENT_PROJECTION);
            if (is_null($data)) {
                return null;
            }

            $this->currentProjection = ProductProjectionModel::of($data);
        }

        return $this->currentProjection;
    }


    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }

    /**
     * @param ?ProductProjection $currentProjection
     */
    public function setCurrentProjection(?ProductProjection $currentProjection): void
    {
        $this->currentProjection = $currentProjection;
    }
}
