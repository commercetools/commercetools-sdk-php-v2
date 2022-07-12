<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<UserProvidedIdentifiers>
 */
final class UserProvidedIdentifiersBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $externalId;

    /**

     * @var ?string
     */
    private $orderNumber;

    /**

     * @var ?string
     */
    private $customerNumber;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**

     * @var null|ContainerAndKey|ContainerAndKeyBuilder
     */
    private $containerAndKey;

    /**
     * <p>User-provided unique identifier of the resource.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**

     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**

     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**

     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>Custom Objects are grouped into containers, which can be used like namespaces. Within a given container, a user-defined key can be used to uniquely identify resources.</p>
     *

     * @return null|ContainerAndKey
     */
    public function getContainerAndKey()
    {
        return $this->containerAndKey instanceof ContainerAndKeyBuilder ? $this->containerAndKey->build() : $this->containerAndKey;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @param ?string $orderNumber
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @param ?string $customerNumber
     * @return $this
     */
    public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?ContainerAndKey $containerAndKey
     * @return $this
     */
    public function withContainerAndKey(?ContainerAndKey $containerAndKey)
    {
        $this->containerAndKey = $containerAndKey;

        return $this;
    }

    /**
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @deprecated use withContainerAndKey() instead
     * @return $this
     */
    public function withContainerAndKeyBuilder(?ContainerAndKeyBuilder $containerAndKey)
    {
        $this->containerAndKey = $containerAndKey;

        return $this;
    }

    public function build(): UserProvidedIdentifiers
    {
        return new UserProvidedIdentifiersModel(
            $this->key,
            $this->externalId,
            $this->orderNumber,
            $this->customerNumber,
            $this->sku,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->containerAndKey instanceof ContainerAndKeyBuilder ? $this->containerAndKey->build() : $this->containerAndKey
        );
    }

    public static function of(): UserProvidedIdentifiersBuilder
    {
        return new self();
    }
}
