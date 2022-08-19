<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface UserProvidedIdentifiers extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    public const FIELD_SKU = 'sku';
    public const FIELD_SLUG = 'slug';
    public const FIELD_CONTAINER_AND_KEY = 'containerAndKey';

    /**
     * <p>User-provided unique identifier of the resource.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>User-provided unique identifier of the resource.</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>User-provided unique identifier of an <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>User-provided unique identifier of a <a href="ctp:api:type:Customer">Customer</a>.</p>
     *

     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * <p>Unique SKU of a <a href="ctp:api:type:ProductVariant">Product Variant</a>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Unique identifier usually used in deep-link URLs for a <a href="ctp:api:type:Product">Product</a>. The value corresponds to the slug in the <code>current</code> <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Unique identifier of a <a href="/../api/projects/custom-objects">Custom Object</a>.</p>
     *

     * @return null|ContainerAndKey
     */
    public function getContainerAndKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?ContainerAndKey $containerAndKey
     */
    public function setContainerAndKey(?ContainerAndKey $containerAndKey): void;
}
