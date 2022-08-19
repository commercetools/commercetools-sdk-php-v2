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
final class ProductPublishedMessagePayloadModel extends JsonObjectModel implements ProductPublishedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductPublished';
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


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $removedImageUrls = null,
        ?ProductProjection $productProjection = null,
        ?string $scope = null
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
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>List of image URLs which were removed during the <a href="ctp:api:type:ProductPublishAction">Publish</a> update action.</p>
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
     * <p>Current <a href="ctp:api:type:ProductProjection">Product Projection</a> of the <a href="ctp:api:type:Product">Product</a> at the time of creation.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        if (is_null($this->productProjection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_PROJECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productProjection = ProductProjectionModel::of($data);
        }

        return $this->productProjection;
    }

    /**
     * <p><a href="ctp:api:type:ProductPublishScope">Publishing Scope</a> that was used during the <a href="ctp:api:type:ProductPublishAction">Publish</a> update action.</p>
     *

     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

        return $this->scope;
    }


    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
}
