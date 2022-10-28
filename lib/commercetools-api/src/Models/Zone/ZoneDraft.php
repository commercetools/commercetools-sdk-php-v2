<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ZoneDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCATIONS = 'locations';

    /**
     * <p>User-defined unique identifier for the Zone.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Zone.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Description of the Zone.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>List of locations that belong to the Zone.</p>
     *

     * @return null|LocationCollection
     */
    public function getLocations();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?LocationCollection $locations
     */
    public function setLocations(?LocationCollection $locations): void;
}
