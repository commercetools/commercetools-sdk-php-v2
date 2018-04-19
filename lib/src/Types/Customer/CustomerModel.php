<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\CustomerUpdateBuilder;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\AddressCollection;
use Commercetools\Types\Common\Address;
use Commercetools\Types\Common\Resource;

class CustomerModel extends ResourceModel implements Customer
{
    /**
     * @var string
     */
    protected $customerNumber;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $middleName;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var \DateTimeImmutable
     */
    protected $dateOfBirth;
    /**
     * @var string
     */
    protected $companyName;
    /**
     * @var string
     */
    protected $vatId;
    /**
     * @var AddressCollection
     */
    protected $addresses;
    /**
     * @var string
     */
    protected $defaultShippingAddressId;
    /**
     * @var array
     */
    protected $shippingAddressIds;
    /**
     * @var string
     */
    protected $defaultBillingAddressId;
    /**
     * @var array
     */
    protected $billingAddressIds;
    /**
     * @var mixed
     */
    protected $isEmailVerified;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var CustomerGroupReference
     */
    protected $customerGroup;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var string
     */
    protected $salutation;
    /**
     * @var string
     */
    protected $key;

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            $value = $this->raw(Customer::FIELD_CUSTOMER_NUMBER);
            $value = (string)$value;
            $this->customerNumber = $value;
        }
        return $this->customerNumber;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(Customer::FIELD_EMAIL);
            $value = (string)$value;
            $this->email = $value;
        }
        return $this->email;
    }
    /**
     * @return string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            $value = $this->raw(Customer::FIELD_PASSWORD);
            $value = (string)$value;
            $this->password = $value;
        }
        return $this->password;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            $value = $this->raw(Customer::FIELD_FIRST_NAME);
            $value = (string)$value;
            $this->firstName = $value;
        }
        return $this->firstName;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            $value = $this->raw(Customer::FIELD_LAST_NAME);
            $value = (string)$value;
            $this->lastName = $value;
        }
        return $this->lastName;
    }
    /**
     * @return string
     */
    public function getMiddleName()
    {
        if (is_null($this->middleName)) {
            $value = $this->raw(Customer::FIELD_MIDDLE_NAME);
            $value = (string)$value;
            $this->middleName = $value;
        }
        return $this->middleName;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            $value = $this->raw(Customer::FIELD_TITLE);
            $value = (string)$value;
            $this->title = $value;
        }
        return $this->title;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            $value = $this->raw(Customer::FIELD_DATE_OF_BIRTH);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d', $value);
            $value = $dateTime ? $dateTime : null;

            $this->dateOfBirth = $value;
        }
        return $this->dateOfBirth;
    }
    /**
     * @return string
     */
    public function getCompanyName()
    {
        if (is_null($this->companyName)) {
            $value = $this->raw(Customer::FIELD_COMPANY_NAME);
            $value = (string)$value;
            $this->companyName = $value;
        }
        return $this->companyName;
    }
    /**
     * @return string
     */
    public function getVatId()
    {
        if (is_null($this->vatId)) {
            $value = $this->raw(Customer::FIELD_VAT_ID);
            $value = (string)$value;
            $this->vatId = $value;
        }
        return $this->vatId;
    }
    /**
     * @return AddressCollection
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) {
            $value = $this->raw(Customer::FIELD_ADDRESSES);
            if (is_null($value)) {
                return $this->mapData(AddressCollection::class, null);
            }
            $value = $this->mapData(AddressCollection::class, $value);
            $this->addresses = $value;
        }
        return $this->addresses;
    }
    /**
     * @return string
     */
    public function getDefaultShippingAddressId()
    {
        if (is_null($this->defaultShippingAddressId)) {
            $value = $this->raw(Customer::FIELD_DEFAULT_SHIPPING_ADDRESS_ID);
            $value = (string)$value;
            $this->defaultShippingAddressId = $value;
        }
        return $this->defaultShippingAddressId;
    }
    /**
     * @return array
     */
    public function getShippingAddressIds()
    {
        if (is_null($this->shippingAddressIds)) {
            $value = $this->raw(Customer::FIELD_SHIPPING_ADDRESS_IDS);
            $value = (array)$value;
            $this->shippingAddressIds = $value;
        }
        return $this->shippingAddressIds;
    }
    /**
     * @return string
     */
    public function getDefaultBillingAddressId()
    {
        if (is_null($this->defaultBillingAddressId)) {
            $value = $this->raw(Customer::FIELD_DEFAULT_BILLING_ADDRESS_ID);
            $value = (string)$value;
            $this->defaultBillingAddressId = $value;
        }
        return $this->defaultBillingAddressId;
    }
    /**
     * @return array
     */
    public function getBillingAddressIds()
    {
        if (is_null($this->billingAddressIds)) {
            $value = $this->raw(Customer::FIELD_BILLING_ADDRESS_IDS);
            $value = (array)$value;
            $this->billingAddressIds = $value;
        }
        return $this->billingAddressIds;
    }
    /**
     * @return mixed
     */
    public function getIsEmailVerified()
    {
        if (is_null($this->isEmailVerified)) {
            $value = $this->raw(Customer::FIELD_IS_EMAIL_VERIFIED);
            $this->isEmailVerified = $value;
        }
        return $this->isEmailVerified;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            $value = $this->raw(Customer::FIELD_EXTERNAL_ID);
            $value = (string)$value;
            $this->externalId = $value;
        }
        return $this->externalId;
    }
    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(Customer::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Customer::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            $value = $this->raw(Customer::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }
    /**
     * @return string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            $value = $this->raw(Customer::FIELD_SALUTATION);
            $value = (string)$value;
            $this->salutation = $value;
        }
        return $this->salutation;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Customer::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }

    /**
     * @param string $customerNumber
     * @return $this
     */
    public function setCustomerNumber(string $customerNumber)
    {
        $this->customerNumber = (string)$customerNumber;

        return $this;
    }
    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = (string)$email;

        return $this;
    }
    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = (string)$password;

        return $this;
    }
    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = (string)$firstName;

        return $this;
    }
    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = (string)$lastName;

        return $this;
    }
    /**
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName(string $middleName)
    {
        $this->middleName = (string)$middleName;

        return $this;
    }
    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = (string)$title;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $dateOfBirth
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if ($dateOfBirth instanceof \DateTime) {
            $dateOfBirth = \DateTimeImmutable::createFromMutable($dateOfBirth);
        }
        if (!$dateOfBirth instanceof \DateTimeImmutable) {
            $dateOfBirth = new \DateTimeImmutable($dateOfBirth);
        }
        $this->$dateOfBirth = $dateOfBirth;

        return $this;
    }
    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = (string)$companyName;

        return $this;
    }
    /**
     * @param string $vatId
     * @return $this
     */
    public function setVatId(string $vatId)
    {
        $this->vatId = (string)$vatId;

        return $this;
    }
    /**
     * @param AddressCollection $addresses
     * @return $this
     */
    public function setAddresses(AddressCollection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }
    /**
     * @param string $defaultShippingAddressId
     * @return $this
     */
    public function setDefaultShippingAddressId(string $defaultShippingAddressId)
    {
        $this->defaultShippingAddressId = (string)$defaultShippingAddressId;

        return $this;
    }
    /**
     * @param $shippingAddressIds
     * @return $this
     */
    public function setShippingAddressIds($shippingAddressIds)
    {
        $this->shippingAddressIds = $shippingAddressIds;

        return $this;
    }
    /**
     * @param string $defaultBillingAddressId
     * @return $this
     */
    public function setDefaultBillingAddressId(string $defaultBillingAddressId)
    {
        $this->defaultBillingAddressId = (string)$defaultBillingAddressId;

        return $this;
    }
    /**
     * @param $billingAddressIds
     * @return $this
     */
    public function setBillingAddressIds($billingAddressIds)
    {
        $this->billingAddressIds = $billingAddressIds;

        return $this;
    }
    /**
     * @param $isEmailVerified
     * @return $this
     */
    public function setIsEmailVerified($isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;

        return $this;
    }
    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = (string)$externalId;

        return $this;
    }
    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = (string)$locale;

        return $this;
    }
    /**
     * @param string $salutation
     * @return $this
     */
    public function setSalutation(string $salutation)
    {
        $this->salutation = (string)$salutation;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Customer::FIELD_DATE_OF_BIRTH]) && $data[Customer::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[Customer::FIELD_DATE_OF_BIRTH] = $data[Customer::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return $data;
    }

    /**
     * @return CustomerUpdateBuilder
     */
    public function update()
    {
        $builder = new CustomerUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
