<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class MyCustomerDraftModel extends JsonObjectModel implements MyCustomerDraft
{
    /**
     * @var ?string
     */
    protected $lastName;

    /**
     * @var ?AddressCollection
     */
    protected $addresses;

    /**
     * @var ?int
     */
    protected $defaultShippingAddress;

    /**
     * @var ?StoreKeyReferenceCollection
     */
    protected $stores;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $companyName;

    /**
     * @var ?string
     */
    protected $vatId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $firstName;

    /**
     * @var ?string
     */
    protected $password;

    /**
     * @var ?string
     */
    protected $middleName;

    /**
     * @var ?int
     */
    protected $defaultBillingAddress;

    /**
     * @var ?string
     */
    protected $email;

    public function __construct(
        string $lastName = null,
        AddressCollection $addresses = null,
        int $defaultShippingAddress = null,
        StoreKeyReferenceCollection $stores = null,
        CustomFields $custom = null,
        string $companyName = null,
        string $vatId = null,
        DateTimeImmutable $dateOfBirth = null,
        string $locale = null,
        string $title = null,
        string $firstName = null,
        string $password = null,
        string $middleName = null,
        int $defaultBillingAddress = null,
        string $email = null
    ) {
        $this->lastName = $lastName;
        $this->addresses = $addresses;
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->stores = $stores;
        $this->custom = $custom;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->dateOfBirth = $dateOfBirth;
        $this->locale = $locale;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->middleName = $middleName;
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->email = $email;
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
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MyCustomerDraft::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
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
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
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

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    public function setDefaultShippingAddress(?int $defaultShippingAddress): void
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
    }

    public function setStores(?StoreKeyReferenceCollection $stores): void
    {
        $this->stores = $stores;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    public function setDefaultBillingAddress(?int $defaultBillingAddress): void
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
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
