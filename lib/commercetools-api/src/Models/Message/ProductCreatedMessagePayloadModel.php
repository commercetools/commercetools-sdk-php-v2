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
final class ProductCreatedMessagePayloadModel extends JsonObjectModel implements ProductCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ProductProjection
     */
    protected $productProjection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductProjection $productProjection = null,
        ?string $type = null
    ) {
        $this->productProjection = $productProjection;
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
     * <p>The staged <a href="ctp:api:type:ProductProjection">Product Projection</a> of the <a href="ctp:api:type:Product">Product</a> at the time of creation.</p>
     *
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
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }
}
