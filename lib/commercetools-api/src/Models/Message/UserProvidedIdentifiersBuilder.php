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

/**
 * @implements Builder<UserProvidedIdentifiers>
 */
final class UserProvidedIdentifiersBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderNumber;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?string
     */
    private $customerNumber;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $slug;

    /**
     * @var ?string
     */
    private $key;

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
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function build(): UserProvidedIdentifiers
    {
        return new UserProvidedIdentifiersModel(
            $this->orderNumber,
            $this->externalId,
            $this->sku,
            $this->customerNumber,
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug),
            $this->key
        );
    }

    public static function of(): UserProvidedIdentifiersBuilder
    {
        return new self();
    }
}
