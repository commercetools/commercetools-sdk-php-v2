<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GeoJsonPoint>
 */
final class GeoJsonPointBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?array
     */
    protected $coordinates;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getCoordinates()
    {
       return $this->coordinates;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCoordinates(?array $coordinates)
    {
        $this->coordinates = $coordinates;
        
        return $this;
    }
    
    public function build(): GeoJsonPoint {
        return new GeoJsonPointModel(
            $this->type,
            $this->coordinates
        );
    }
    
    public static function of(): GeoJsonPointBuilder
    {
        return new self();
    }
}