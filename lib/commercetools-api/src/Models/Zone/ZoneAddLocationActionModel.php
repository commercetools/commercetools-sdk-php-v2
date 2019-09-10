<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ZoneAddLocationActionModel extends JsonObjectModel implements ZoneAddLocationAction
{
    const DISCRIMINATOR_VALUE = 'addLocation';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Location
     */
    protected $location;

    public function __construct(
        string $action = null,
        Location $location = null
    ) {
        $this->action = $action;
        $this->location = $location;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ZoneUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Location
     */
    public function getLocation()
    {
        if (is_null($this->location)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ZoneAddLocationAction::FIELD_LOCATION);
            if (is_null($data)) {
                return null;
            }

            $this->location = LocationModel::of($data);
        }

        return $this->location;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }
}
