<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneDraft extends JsonObject {
    protected $name;
    protected $description;
    protected $locations;

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return string
     */
    public function getDescription(): string
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = (string)$value;
            } else {
                return '';
            }
        }
        return $this->description;
    }
                

    /**
     * @return LocationCollection
     */
    public function getLocations(): LocationCollection
    {
        if (is_null($this->locations)) {
            $value = $this->raw('locations');
            if (!is_null($value)) {
                $this->locations = Mapper::map($value, LocationCollection::class);
            } else {
                return Mapper::map([], LocationCollection::class);
            }
        }
        return $this->locations;
    }
                
}
