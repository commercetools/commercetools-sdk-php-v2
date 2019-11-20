<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductPublishedMessagePayloadModel extends JsonObjectModel implements ProductPublishedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductPublished';

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
    protected $productProjection;

    /**
     * @var ?string
     */
    protected $scope;

    public function __construct(
        array $removedImageUrls = null,
        ProductProjection $productProjection = null,
        string $scope = null
    ) {
        $this->removedImageUrls = $removedImageUrls;
        $this->productProjection = $productProjection;
        $this->scope = $scope;
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
     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ProductPublishedMessagePayload::FIELD_REMOVED_IMAGE_URLS);
            if (is_null($data)) {
                return null;
            }
            $this->removedImageUrls = $data;
        }

        return $this->removedImageUrls;
    }

    /**
     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        if (is_null($this->productProjection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductPublishedMessagePayload::FIELD_PRODUCT_PROJECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productProjection = ProductProjectionModel::of($data);
        }

        return $this->productProjection;
    }

    /**
     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductPublishedMessagePayload::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

        return $this->scope;
    }

    public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }

    public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }

    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
}
