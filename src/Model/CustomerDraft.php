<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerDraft extends JsonObject {
    protected $customerNumber;
    protected $email;
    protected $password;
    protected $firstName;
    protected $lastName;
    protected $middleName;
    protected $title;
    protected $anonymousCartId;
    protected $anonymousId;
    protected $dateOfBirth;
    protected $companyName;
    protected $vatId;
    protected $addresses;
    protected $defaultShippingAddress;
    protected $shippingAddresses;
    protected $defaultBillingAddress;
    protected $billingAddresses;
    protected $isEmailVerified;
    protected $externalId;
    protected $customerGroup;
    protected $custom;
    protected $locale;

    /**
     * @return string
     */
    public function getCustomerNumber(): string
    {
        if (is_null($this->customerNumber)) {
            $value = $this->raw('customerNumber');
            if (!is_null($value)) {
                $this->customerNumber = (string)$value;
            } else {
                return '';
            }
        }
        return $this->customerNumber;
    }
                

    /**
     * @return string
     */
    public function getEmail(): string
    {
        if (is_null($this->email)) {
            $value = $this->raw('email');
            if (!is_null($value)) {
                $this->email = (string)$value;
            } else {
                return '';
            }
        }
        return $this->email;
    }
                

    /**
     * @return string
     */
    public function getPassword(): string
    {
        if (is_null($this->password)) {
            $value = $this->raw('password');
            if (!is_null($value)) {
                $this->password = (string)$value;
            } else {
                return '';
            }
        }
        return $this->password;
    }
                

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        if (is_null($this->firstName)) {
            $value = $this->raw('firstName');
            if (!is_null($value)) {
                $this->firstName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->firstName;
    }
                

    /**
     * @return string
     */
    public function getLastName(): string
    {
        if (is_null($this->lastName)) {
            $value = $this->raw('lastName');
            if (!is_null($value)) {
                $this->lastName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->lastName;
    }
                

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        if (is_null($this->middleName)) {
            $value = $this->raw('middleName');
            if (!is_null($value)) {
                $this->middleName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->middleName;
    }
                

    /**
     * @return string
     */
    public function getTitle(): string
    {
        if (is_null($this->title)) {
            $value = $this->raw('title');
            if (!is_null($value)) {
                $this->title = (string)$value;
            } else {
                return '';
            }
        }
        return $this->title;
    }
                

    /**
     * @return string
     */
    public function getAnonymousCartId(): string
    {
        if (is_null($this->anonymousCartId)) {
            $value = $this->raw('anonymousCartId');
            if (!is_null($value)) {
                $this->anonymousCartId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->anonymousCartId;
    }
                

    /**
     * @return string
     */
    public function getAnonymousId(): string
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw('anonymousId');
            if (!is_null($value)) {
                $this->anonymousId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->anonymousId;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getDateOfBirth(): \DateTimeImmutable
    {
        if (is_null($this->dateOfBirth)) {
            $value = $this->raw('dateOfBirth');
            if (!is_null($value)) {
                $this->dateOfBirth = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->dateOfBirth;
    }
                

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        if (is_null($this->companyName)) {
            $value = $this->raw('companyName');
            if (!is_null($value)) {
                $this->companyName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->companyName;
    }
                

    /**
     * @return string
     */
    public function getVatId(): string
    {
        if (is_null($this->vatId)) {
            $value = $this->raw('vatId');
            if (!is_null($value)) {
                $this->vatId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->vatId;
    }
                

    /**
     * @return AddressCollection
     */
    public function getAddresses(): AddressCollection
    {
        if (is_null($this->addresses)) {
            $value = $this->raw('addresses');
            if (!is_null($value)) {
                $this->addresses = Mapper::map($value, AddressCollection::class);
            } else {
                return Mapper::map([], AddressCollection::class);
            }
        }
        return $this->addresses;
    }
                

    /**
     * @return int
     */
    public function getDefaultShippingAddress(): int
    {
        if (is_null($this->defaultShippingAddress)) {
            $value = $this->raw('defaultShippingAddress');
            if (!is_null($value)) {
                $this->defaultShippingAddress = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->defaultShippingAddress;
    }
                

    /**
     * @return array
     */
    public function getShippingAddresses(): array
    {
        if (is_null($this->shippingAddresses)) {
            $value = $this->raw('shippingAddresses');
            if (!is_null($value)) {
                $this->shippingAddresses = $value;
            } else {
                return [];
            }
        }
        return $this->shippingAddresses;
    }
                

    /**
     * @return int
     */
    public function getDefaultBillingAddress(): int
    {
        if (is_null($this->defaultBillingAddress)) {
            $value = $this->raw('defaultBillingAddress');
            if (!is_null($value)) {
                $this->defaultBillingAddress = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->defaultBillingAddress;
    }
                

    /**
     * @return array
     */
    public function getBillingAddresses(): array
    {
        if (is_null($this->billingAddresses)) {
            $value = $this->raw('billingAddresses');
            if (!is_null($value)) {
                $this->billingAddresses = $value;
            } else {
                return [];
            }
        }
        return $this->billingAddresses;
    }
                

    /**
     * @return bool
     */
    public function getIsEmailVerified(): bool
    {
        if (is_null($this->isEmailVerified)) {
            $value = $this->raw('isEmailVerified');
            if (!is_null($value)) {
                $this->isEmailVerified = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isEmailVerified;
    }
                

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        if (is_null($this->externalId)) {
            $value = $this->raw('externalId');
            if (!is_null($value)) {
                $this->externalId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->externalId;
    }
                

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup(): CustomerGroupReference
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw('customerGroup');
            if (!is_null($value)) {
                $this->customerGroup = Mapper::map($value, CustomerGroupReference::class);
            } else {
                return Mapper::map([], CustomerGroupReference::class);
            }
        }
        return $this->customerGroup;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                

    /**
     * @return string
     */
    public function getLocale(): string
    {
        if (is_null($this->locale)) {
            $value = $this->raw('locale');
            if (!is_null($value)) {
                $this->locale = (string)$value;
            } else {
                return '';
            }
        }
        return $this->locale;
    }
                
}
