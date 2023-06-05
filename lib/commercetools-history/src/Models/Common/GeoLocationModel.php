<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GeoLocationModel extends JsonObjectModel implements GeoLocation
{


    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?array
     */
    protected $coordinates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null,
        ?array $coordinates = null
    ) {
        $this->type = $type;
        $this->coordinates = $coordinates;

    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     *
     * @return null|array
     */
    public function getCoordinates()
    {
        if (is_null($this->coordinates)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_COORDINATES);
            if (is_null($data)) {
                return null;
            }
            $this->coordinates = $data;
        }

        return $this->coordinates;
    }


    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?array $coordinates
     */
    public function setCoordinates(?array $coordinates): void
    {
        $this->coordinates = $coordinates;
    }



}
