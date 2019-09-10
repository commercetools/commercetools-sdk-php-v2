<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ZoneDraftModel extends JsonObjectModel implements ZoneDraft
{
    
    public function __construct(
        string $name = null,
        string $description = null,
        LocationCollection $locations = null,
        string $key = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->locations = $locations;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $description;
    
    /**
     * @var ?LocationCollection
     */
    protected $locations;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ZoneDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ZoneDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           $this->description = (string)$data;
       }
       return $this->description;
    }
    
    /**
     *
     * @return LocationCollection|null
     */
    final public function getLocations()
    {
       if (is_null($this->locations)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ZoneDraft::FIELD_LOCATIONS);
           if (is_null($data)) {
               return null;
           }
           $this->locations = LocationCollection::fromArray($data);
       }
       return $this->locations;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ZoneDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    
    final public function setLocations(?LocationCollection $locations): void
    {
        $this->locations = $locations;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}