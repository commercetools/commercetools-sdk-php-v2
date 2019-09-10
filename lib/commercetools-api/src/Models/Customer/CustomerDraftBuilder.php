<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<CustomerDraft>
 */
final class CustomerDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $anonymousId;
    
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
     * @var ?CustomerGroupResourceIdentifierBuilder|CustomerGroupResourceIdentifier
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
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
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?array
     */
    protected $billingAddresses;
    
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
    protected $customerNumber;
    
    /**
     * @var ?bool
     */
    protected $isEmailVerified;
    
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
     * @var ?string
     */
    protected $salutation;
    
    /**
     * @var ?string
     */
    protected $anonymousCartId;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?int
     */
    protected $defaultBillingAddress;
    
    /**
     * @var ?string
     */
    protected $email;
    
    /**
     * @var ?array
     */
    protected $shippingAddresses;

    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       return $this->anonymousId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLastName()
    {
       return $this->lastName;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getAddresses()
    {
       return $this->addresses;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDefaultShippingAddress()
    {
       return $this->defaultShippingAddress;
    }
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup);
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCompanyName()
    {
       return $this->companyName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getVatId()
    {
       return $this->vatId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getBillingAddresses()
    {
       return $this->billingAddresses;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDateOfBirth()
    {
       return $this->dateOfBirth;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerNumber()
    {
       return $this->customerNumber;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsEmailVerified()
    {
       return $this->isEmailVerified;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFirstName()
    {
       return $this->firstName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPassword()
    {
       return $this->password;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMiddleName()
    {
       return $this->middleName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSalutation()
    {
       return $this->salutation;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousCartId()
    {
       return $this->anonymousCartId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDefaultBillingAddress()
    {
       return $this->defaultBillingAddress;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       return $this->email;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getShippingAddresses()
    {
       return $this->shippingAddresses;
    }
    /**
     * @return $this
     */
    final public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAddresses(?AddressCollection $addresses)
    {
        $this->addresses = $addresses;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDefaultShippingAddress(?int $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBillingAddresses(?array $billingAddresses)
    {
        $this->billingAddresses = $billingAddresses;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLocale(?string $locale)
    {
        $this->locale = $locale;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTitle(?string $title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsEmailVerified(?bool $isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPassword(?string $password)
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAnonymousCartId(?string $anonymousCartId)
    {
        $this->anonymousCartId = $anonymousCartId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDefaultBillingAddress(?int $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEmail(?string $email)
    {
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingAddresses(?array $shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    public function build(): CustomerDraft {
        return new CustomerDraftModel(
            $this->anonymousId,
            $this->lastName,
            $this->addresses,
            $this->defaultShippingAddress,
            ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            $this->companyName,
            $this->vatId,
            $this->externalId,
            $this->billingAddresses,
            $this->dateOfBirth,
            $this->locale,
            $this->title,
            $this->customerNumber,
            $this->isEmailVerified,
            $this->firstName,
            $this->password,
            $this->middleName,
            $this->salutation,
            $this->anonymousCartId,
            $this->key,
            $this->defaultBillingAddress,
            $this->email,
            $this->shippingAddresses
        );
    }
    
    public static function of(): CustomerDraftBuilder
    {
        return new self();
    }
}