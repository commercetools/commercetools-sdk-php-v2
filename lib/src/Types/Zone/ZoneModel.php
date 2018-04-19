<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\ZoneUpdateBuilder;
use Commercetools\Types\Common\Resource;

class ZoneModel extends ResourceModel implements Zone
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var LocationCollection
     */
    protected $locations;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(Zone::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(Zone::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return LocationCollection
     */
    public function getLocations()
    {
        if (is_null($this->locations)) {
            $value = $this->raw(Zone::FIELD_LOCATIONS);
            if (is_null($value)) {
                return $this->mapData(LocationCollection::class, null);
            }
            $value = $this->mapData(LocationCollection::class, $value);
            $this->locations = $value;
        }
        return $this->locations;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = (string)$description;

        return $this;
    }
    /**
     * @param LocationCollection $locations
     * @return $this
     */
    public function setLocations(LocationCollection $locations)
    {
        $this->locations = $locations;

        return $this;
    }


    /**
     * @return ZoneUpdateBuilder
     */
    public function update()
    {
        $builder = new ZoneUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
