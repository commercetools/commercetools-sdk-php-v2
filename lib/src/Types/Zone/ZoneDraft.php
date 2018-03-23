<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\JsonObject;

interface ZoneDraft extends JsonObject {
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_LOCATIONS = 'locations';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return LocationCollection
     */
    public function getLocations();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);

    /**
     * @param LocationCollection $locations
     * @return $this
     */
    public function setLocations(LocationCollection $locations);

}
