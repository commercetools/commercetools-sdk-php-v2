<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ZoneAddLocationActionModel extends JsonObjectModel implements ZoneAddLocationAction
{
    public const DISCRIMINATOR_VALUE = 'addLocation';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?Location
     */
    protected $location;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Location $location = null,
        ?string $action = null
    ) {
        $this->location = $location;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Location to be added to the Zone.</p>
     *
     *
     * @return null|Location
     */
    public function getLocation()
    {
        if (is_null($this->location)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LOCATION);
            if (is_null($data)) {
                return null;
            }

            $this->location = LocationModel::of($data);
        }

        return $this->location;
    }


    /**
     * @param ?Location $location
     */
    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }
}
