<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\LoggedResource;

interface Zone extends LoggedResource
{
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_LOCATIONS = 'locations';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * @return null|LocationCollection
     */
    public function getLocations();

    public function setKey(?string $key): void;

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setLocations(?LocationCollection $locations): void;
}
