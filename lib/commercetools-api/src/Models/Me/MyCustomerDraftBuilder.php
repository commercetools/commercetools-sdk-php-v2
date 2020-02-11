<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<MyCustomerDraft>
 */
final class MyCustomerDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $email;

    /**
     * @var ?string
     */
    private $password;

    /**
     * @var ?string
     */
    private $firstName;

    /**
     * @var ?string
     */
    private $lastName;

    /**
     * @var ?string
     */
    private $middleName;

    /**
     * @var ?string
     */
    private $title;

    /**
     * @var ?DateTimeImmutable
     */
    private $dateOfBirth;

    /**
     * @var ?string
     */
    private $companyName;

    /**
     * @var ?string
     */
    private $vatId;

    /**
     * @var ?AddressCollection
     */
    private $addresses;

    /**
     * @var ?int
     */
    private $defaultShippingAddress;

    /**
     * @var ?int
     */
    private $defaultBillingAddress;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * <p>Sets the ID of each address to be unique in the addresses list.</p>
     *
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>The index of the address in the addresses array.
     * The <code>defaultShippingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * <p>The index of the address in the addresses array.
     * The <code>defaultBillingAddressId</code> of the customer will be set to the ID of that address.</p>
     *
     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddresses(?AddressCollection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDefaultShippingAddress(?int $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDefaultBillingAddress(?int $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStores(?StoreResourceIdentifierCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): MyCustomerDraft
    {
        return new MyCustomerDraftModel(
            $this->email,
            $this->password,
            $this->firstName,
            $this->lastName,
            $this->middleName,
            $this->title,
            $this->dateOfBirth,
            $this->companyName,
            $this->vatId,
            $this->addresses,
            $this->defaultShippingAddress,
            $this->defaultBillingAddress,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->locale,
            $this->stores
        );
    }

    public static function of(): MyCustomerDraftBuilder
    {
        return new self();
    }
}
