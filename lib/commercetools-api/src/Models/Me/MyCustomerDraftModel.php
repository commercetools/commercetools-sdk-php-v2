<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class MyCustomerDraftModel extends JsonObjectModel implements MyCustomerDraft
{

    /**
     * @var ?string
     */
    protected $email;

    /**
     * @var ?string
     */
    protected $password;

    /**
     * @var ?string
     */
    protected $firstName;

    /**
     * @var ?string
     */
    protected $lastName;

    /**
     * @var ?string
     */
    protected $middleName;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;

    /**
     * @var ?string
     */
    protected $companyName;

    /**
     * @var ?string
     */
    protected $vatId;

    /**
     * @var ?AddressCollection
     */
    protected $addresses;

    /**
     * @var ?int
     */
    protected $defaultShippingAddress;

    /**
     * @var ?int
     */
    protected $defaultBillingAddress;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;


    public function __construct(
        string $email = null,
        string $password = null,
        string $firstName = null,
        string $lastName = null,
        string $middleName = null,
        string $title = null,
        DateTimeImmutable $dateOfBirth = null,
        string $companyName = null,
        string $vatId = null,
        AddressCollection $addresses = null,
        int $defaultShippingAddress = null,
        int $defaultBillingAddress = null,
        CustomFields $custom = null,
        string $locale = null,
        StoreResourceIdentifierCollection $stores = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->title = $title;
        $this->dateOfBirth = $dateOfBirth;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->addresses = $addresses;
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->custom = $custom;
        $this->locale = $locale;
        $this->stores = $stores;

    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->password = (string) $data;
        }

        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_FIRST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->firstName = (string) $data;
        }

        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_LAST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->lastName = (string) $data;
        }

        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getMiddleName()
    {
        if (is_null($this->middleName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_MIDDLE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->middleName = (string) $data;
        }

        return $this->middleName;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_DATE_OF_BIRTH);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->dateOfBirth = $data;
        }

        return $this->dateOfBirth;
    }

    /**
     * @return null|string
     */
    public function getCompanyName()
    {
        if (is_null($this->companyName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_COMPANY_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->companyName = (string) $data;
        }

        return $this->companyName;
    }

    /**
     * @return null|string
     */
    public function getVatId()
    {
        if (is_null($this->vatId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_VAT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->vatId = (string) $data;
        }

        return $this->vatId;
    }

    /**
     * <p>Sets the ID of each address to be unique in the addresses list.</p>
     *
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MyCustomerDraft::FIELD_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->addresses = AddressCollection::fromArray($data);
        }

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
        if (is_null($this->defaultShippingAddress)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MyCustomerDraft::FIELD_DEFAULT_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShippingAddress = (int) $data;
        }

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
        if (is_null($this->defaultBillingAddress)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MyCustomerDraft::FIELD_DEFAULT_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }
            $this->defaultBillingAddress = (int) $data;
        }

        return $this->defaultBillingAddress;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCustomerDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerDraft::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MyCustomerDraft::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreResourceIdentifierCollection::fromArray($data);
        }

        return $this->stores;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }

    public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    public function setDefaultShippingAddress(?int $defaultShippingAddress): void
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
    }

    public function setDefaultBillingAddress(?int $defaultBillingAddress): void
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setStores(?StoreResourceIdentifierCollection $stores): void
    {
        $this->stores = $stores;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[MyCustomerDraft::FIELD_DATE_OF_BIRTH]) && $data[MyCustomerDraft::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[MyCustomerDraft::FIELD_DATE_OF_BIRTH] = $data[MyCustomerDraft::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }

}
