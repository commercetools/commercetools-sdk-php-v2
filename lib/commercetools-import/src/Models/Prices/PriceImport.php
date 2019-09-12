<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\Money;
use DateTimeImmutable;

interface PriceImport extends ImportResource
{
    const FIELD_VALUE = 'value';
    const FIELD_COUNTRY = 'country';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_CHANNEL = 'channel';
    const FIELD_PRODUCT_VARIANT = 'productVariant';

    /**
     * @return null|Money
     */
    public function getValue();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getCustomerGroup();

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getChannel();

    /**
     * <p>The product variant in which this price is contained.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductVariant();

    public function setValue(?Money $value): void;

    public function setCountry(?string $country): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    public function setCustomerGroup(?ImportReference $customerGroup): void;

    public function setChannel(?ImportReference $channel): void;

    public function setProductVariant(?ImportReference $productVariant): void;
}
