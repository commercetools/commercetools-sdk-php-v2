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

    public const DISCRIMINATOR_VALUE = 'Point';
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
        ?array $coordinates = null,
        ?string $type = null
    ) {
        $this->coordinates = $coordinates;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
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
     * @param ?array $coordinates
     */
    public function setCoordinates(?array $coordinates): void
    {
        $this->coordinates = $coordinates;
    }



}
