<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ZoneDraft extends JsonObject
{

    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCATIONS = 'locations';

    /**
     * <p>User-specific unique identifier for a zone.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction.</p>
     *
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
