<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
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

     * @var ?string
     */
    private $salutation;

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

     * @var ?BaseAddressCollection
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

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
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
     * <p>Email address of the Customer that is <a href="/../api/customers-overview#customer-uniqueness">unique</a> for an entire Project or Store the Customer is assigned to.
     * It is the mandatory unique identifier of a Customer.</p>
     *

     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <p>Password of the Customer.</p>
     *

     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * <p>Given name (first name) of the Customer.</p>
     *

     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * <p>Family name (last name) of the Customer.</p>
     *

     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * <p>Middle name of the Customer.</p>
     *

     * @return null|string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * <p>Title of the Customer, for example, 'Dr.'.</p>
     *

     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <p>Salutation of the Customer, for example, 'Mr.' or 'Mrs.'.</p>
     *

     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * <p>Date of birth of the Customer.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * <p>Company name of the Customer.</p>
     *

     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * <p>Unique VAT ID of the Customer.</p>
     *

     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * <p>Addresses of the Customer.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <p>Index of the address in the <code>addresses</code> array to use as the default shipping address.
     * The <code>defaultShippingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * <p>Index of the address in the <code>addresses</code> array to use as the default billing address.
     * The <code>defaultBillingAddressId</code> of the Customer will be set to the <code>id</code> of that address.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * <p>Custom Fields for the Customer.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Preferred language of the Customer. Must be one of the languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:Store">Stores</a> for the Customer.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param ?string $password
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param ?string $firstName
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param ?string $lastName
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param ?string $middleName
     * @return $this
     */
    public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @param ?string $title
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param ?string $salutation
     * @return $this
     */
    public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @param ?string $companyName
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param ?string $vatId
     * @return $this
     */
    public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @param ?BaseAddressCollection $addresses
     * @return $this
     */
    public function withAddresses(?BaseAddressCollection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param ?int $defaultShippingAddress
     * @return $this
     */
    public function withDefaultShippingAddress(?int $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    /**
     * @param ?int $defaultBillingAddress
     * @return $this
     */
    public function withDefaultBillingAddress(?int $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     * @return $this
     */
    public function withStores(?StoreResourceIdentifierCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
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
            $this->salutation,
            $this->dateOfBirth,
            $this->companyName,
            $this->vatId,
            $this->addresses,
            $this->defaultShippingAddress,
            $this->defaultBillingAddress,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->locale,
            $this->stores
        );
    }

    public static function of(): MyCustomerDraftBuilder
    {
        return new self();
    }
}
