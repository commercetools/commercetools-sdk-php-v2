<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneDraft>
 */
final class ZoneDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $description;

    /**

     * @var ?LocationCollection
     */
    private $locations;

    /**
     * <p>User-defined unique identifier for the Zone.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the Zone.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Description of the Zone.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>List of locations that belong to the Zone.</p>
     *

     * @return null|LocationCollection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?LocationCollection $locations
     * @return $this
     */
    public function withLocations(?LocationCollection $locations)
    {
        $this->locations = $locations;

        return $this;
    }


    public function build(): ZoneDraft
    {
        return new ZoneDraftModel(
            $this->key,
            $this->name,
            $this->description,
            $this->locations
        );
    }

    public static function of(): ZoneDraftBuilder
    {
        return new self();
    }
}
