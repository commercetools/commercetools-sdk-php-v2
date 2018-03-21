<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\AddressCollection;
use Commercetools\Types\Common\Address;

class MyCustomerDraftModel extends JsonObjectModel implements MyCustomerDraft {
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
     * @var int
     */
    protected $defaultShippingAddress;
    /**
     * @var int
     */
    protected $defaultBillingAddress;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var string
     */
    protected $locale;

    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(MyCustomerDraft::FIELD_EMAIL);
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
            $value = $this->raw(MyCustomerDraft::FIELD_PASSWORD);
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
            $value = $this->raw(MyCustomerDraft::FIELD_FIRST_NAME);
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
            $value = $this->raw(MyCustomerDraft::FIELD_LAST_NAME);
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
            $value = $this->raw(MyCustomerDraft::FIELD_MIDDLE_NAME);
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
            $value = $this->raw(MyCustomerDraft::FIELD_TITLE);
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
            $value = $this->raw(MyCustomerDraft::FIELD_DATE_OF_BIRTH);
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
            $value = $this->raw(MyCustomerDraft::FIELD_COMPANY_NAME);
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
            $value = $this->raw(MyCustomerDraft::FIELD_VAT_ID);
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
            $value = $this->raw(MyCustomerDraft::FIELD_ADDRESSES);
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
            $value = $this->raw(MyCustomerDraft::FIELD_DEFAULT_SHIPPING_ADDRESS);
            $value = (int)$value;
            $this->defaultShippingAddress = $value;
        }
        return $this->defaultShippingAddress;
    }
    /**
     * @return int
     */
    public function getDefaultBillingAddress()
    {
        if (is_null($this->defaultBillingAddress)) {
            $value = $this->raw(MyCustomerDraft::FIELD_DEFAULT_BILLING_ADDRESS);
            $value = (int)$value;
            $this->defaultBillingAddress = $value;
        }
        return $this->defaultBillingAddress;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(MyCustomerDraft::FIELD_CUSTOM);
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
            $value = $this->raw(MyCustomerDraft::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
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
     * @param int $defaultShippingAddress
     * @return $this
     */
    public function setDefaultShippingAddress(int $defaultShippingAddress)
    {
        $this->defaultShippingAddress = (int)$defaultShippingAddress;

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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[MyCustomerDraft::FIELD_DATE_OF_BIRTH]) && $data[MyCustomerDraft::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[MyCustomerDraft::FIELD_DATE_OF_BIRTH] = $data[MyCustomerDraft::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return $data;
    }
}
