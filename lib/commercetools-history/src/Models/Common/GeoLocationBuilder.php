<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GeoLocation>
 */
final class GeoLocationBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $coordinates;

    /**

     * @return null|array
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param ?array $coordinates
     * @return $this
     */
    public function withCoordinates(?array $coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }


    public function build(): GeoLocation
    {
        return new GeoLocationModel(
            $this->coordinates
        );
    }

    public static function of(): GeoLocationBuilder
    {
        return new self();
    }
}
