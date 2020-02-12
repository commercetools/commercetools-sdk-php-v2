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

final class ZoneRemoveLocationActionModel extends JsonObjectModel implements ZoneRemoveLocationAction
{
    public const DISCRIMINATOR_VALUE = 'removeLocation';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Location
     */
    protected $location;


    public function __construct(
        Location $location = null
    ) {
        $this->location = $location;
        $this->action = static::DISCRIMINATOR_VALUE;
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
            $data = $this->raw(ZoneRemoveLocationAction::FIELD_LOCATION);
            if (is_null($data)) {
                return null;
            }

            $this->location = LocationModel::of($data);
        }

        return $this->location;
    }

    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }
}
