<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<MyCustomerDraft>
 */
final class MyCustomerDraftBuilder implements Builder
{
    public function __construct() {
    }

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
     * @var ?CustomFieldsBuilder|CustomFields
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
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
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
    final public function withCustom(?CustomFields $custom)
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
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    public function build(): MyCustomerDraft {
        return new MyCustomerDraftModel(
            $this->lastName,
            $this->addresses,
            $this->defaultShippingAddress,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->companyName,
            $this->vatId,
            $this->dateOfBirth,
            $this->locale,
            $this->title,
            $this->firstName,
            $this->password,
            $this->middleName,
            $this->defaultBillingAddress,
            $this->email
        );
    }
    
    public static function of(): MyCustomerDraftBuilder
    {
        return new self();
    }
}