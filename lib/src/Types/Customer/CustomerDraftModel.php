<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\AddressCollection;
use Commercetools\Types\Common\Address;

class CustomerDraftModel extends JsonObjectModel implements CustomerDraft {
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
     * @var string
     */
    protected $anonymousCartId;
    /**
     * @var string
     */
    protected $anonymousId;
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
     * @var int
     */
    protected $defaultShippingAddress;
    /**
     * @var array
     */
    protected $shippingAddresses;
    /**
     * @var int
     */
    protected $defaultBillingAddress;
    /**
     * @var array
     */
    protected $billingAddresses;
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
     * @var CustomFieldsDraft
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
            $value = $this->raw(CustomerDraft::FIELD_CUSTOMER_NUMBER);
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
            $value = $this->raw(CustomerDraft::FIELD_EMAIL);
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
            $value = $this->raw(CustomerDraft::FIELD_PASSWORD);
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
            $value = $this->raw(CustomerDraft::FIELD_FIRST_NAME);
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
            $value = $this->raw(CustomerDraft::FIELD_LAST_NAME);
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
            $value = $this->raw(CustomerDraft::FIELD_MIDDLE_NAME);
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
            $value = $this->raw(CustomerDraft::FIELD_TITLE);
            $value = (string)$value;
            $this->title = $value;
        }
        return $this->title;
    }
    /**
     * @return string
     */
    public function getAnonymousCartId()
    {
        if (is_null($this->anonymousCartId)) {
            $value = $this->raw(CustomerDraft::FIELD_ANONYMOUS_CART_ID);
            $value = (string)$value;
            $this->anonymousCartId = $value;
        }
        return $this->anonymousCartId;
    }
    /**
     * @return string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw(CustomerDraft::FIELD_ANONYMOUS_ID);
            $value = (string)$value;
            $this->anonymousId = $value;
        }
        return $this->anonymousId;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            $value = $this->raw(CustomerDraft::FIELD_DATE_OF_BIRTH);
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
            $value = $this->raw(CustomerDraft::FIELD_COMPANY_NAME);
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
            $value = $this->raw(CustomerDraft::FIELD_VAT_ID);
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
            $value = $this->raw(CustomerDraft::FIELD_ADDRESSES);
            if (is_null($value)) {
                return $this->mapData(AddressCollection::class, null);
            }
            $value = $this->mapData(AddressCollection::class, $value);
            $this->addresses = $value;
        }
        return $this->addresses;
    }
    /**
     * @return int
     */
    public function getDefaultShippingAddress()
    {
        if (is_null($this->defaultShippingAddress)) {
            $value = $this->raw(CustomerDraft::FIELD_DEFAULT_SHIPPING_ADDRESS);
            $value = (int)$value;
            $this->defaultShippingAddress = $value;
        }
        return $this->defaultShippingAddress;
    }
    /**
     * @return array
     */
    public function getShippingAddresses()
    {
        if (is_null($this->shippingAddresses)) {
            $value = $this->raw(CustomerDraft::FIELD_SHIPPING_ADDRESSES);
            $value = (array)$value;
            $this->shippingAddresses = $value;
        }
        return $this->shippingAddresses;
    }
    /**
     * @return int
     */
    public function getDefaultBillingAddress()
    {
        if (is_null($this->defaultBillingAddress)) {
            $value = $this->raw(CustomerDraft::FIELD_DEFAULT_BILLING_ADDRESS);
            $value = (int)$value;
            $this->defaultBillingAddress = $value;
        }
        return $this->defaultBillingAddress;
    }
    /**
     * @return array
     */
    public function getBillingAddresses()
    {
        if (is_null($this->billingAddresses)) {
            $value = $this->raw(CustomerDraft::FIELD_BILLING_ADDRESSES);
            $value = (array)$value;
            $this->billingAddresses = $value;
        }
        return $this->billingAddresses;
    }
    /**
     * @return mixed
     */
    public function getIsEmailVerified()
    {
        if (is_null($this->isEmailVerified)) {
            $value = $this->raw(CustomerDraft::FIELD_IS_EMAIL_VERIFIED);
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
            $value = $this->raw(CustomerDraft::FIELD_EXTERNAL_ID);
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
            $value = $this->raw(CustomerDraft::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CustomerDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

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
            $value = $this->raw(CustomerDraft::FIELD_LOCALE);
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
            $value = $this->raw(CustomerDraft::FIELD_SALUTATION);
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
            $value = $this->raw(CustomerDraft::FIELD_KEY);
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
     * @param string $anonymousCartId
     * @return $this
     */
    public function setAnonymousCartId(string $anonymousCartId)
    {
        $this->anonymousCartId = (string)$anonymousCartId;

        return $this;
    }
    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId)
    {
        $this->anonymousId = (string)$anonymousId;

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
     * @param int $defaultShippingAddress
     * @return $this
     */
    public function setDefaultShippingAddress(int $defaultShippingAddress)
    {
        $this->defaultShippingAddress = (int)$defaultShippingAddress;

        return $this;
    }
    /**
     * @param $shippingAddresses
     * @return $this
     */
    public function setShippingAddresses($shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;

        return $this;
    }
    /**
     * @param int $defaultBillingAddress
     * @return $this
     */
    public function setDefaultBillingAddress(int $defaultBillingAddress)
    {
        $this->defaultBillingAddress = (int)$defaultBillingAddress;

        return $this;
    }
    /**
     * @param $billingAddresses
     * @return $this
     */
    public function setBillingAddresses($billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;

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
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
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
        if (isset($data[CustomerDraft::FIELD_DATE_OF_BIRTH]) && $data[CustomerDraft::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerDraft::FIELD_DATE_OF_BIRTH] = $data[CustomerDraft::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return $data;
    }
}
