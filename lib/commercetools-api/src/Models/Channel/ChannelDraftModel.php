<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class ChannelDraftModel extends JsonObjectModel implements ChannelDraft
{
    
    public function __construct(
        Address $address = null,
        JsonObject $geoLocation = null,
        CustomFieldsDraft $custom = null,
        array $roles = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        string $key = null
    ) {
        $this->address = $address;
        $this->geoLocation = $geoLocation;
        $this->custom = $custom;
        $this->roles = $roles;
        $this->name = $name;
        $this->description = $description;
        $this->key = $key;
        
    }

    /**
     * @var ?Address
     */
    protected $address;
    
    /**
     * @var ?JsonObject
     */
    protected $geoLocation;
    
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?array
     */
    protected $roles;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?LocalizedString
     */
    protected $description;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return Address|null
     */
    final public function getAddress()
    {
       if (is_null($this->address)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ChannelDraft::FIELD_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->address = AddressModel::of($data);
       }
       return $this->address;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getGeoLocation()
    {
       if (is_null($this->geoLocation)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(ChannelDraft::FIELD_GEO_LOCATION);
           if (is_null($data)) {
               return null;
           }
           $this->geoLocation = JsonObjectModel::of($data);
       }
       return $this->geoLocation;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ChannelDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getRoles()
    {
       if (is_null($this->roles)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ChannelDraft::FIELD_ROLES);
           if (is_null($data)) {
               return null;
           }
           $this->roles = $data;
       }
       return $this->roles;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ChannelDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ChannelDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ChannelDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
    final public function setGeoLocation(?JsonObject $geoLocation): void
    {
        $this->geoLocation = $geoLocation;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}