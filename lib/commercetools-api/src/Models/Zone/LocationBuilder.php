<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Location>
 */
final class LocationBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?string
     */
    protected $state;

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       return $this->state;
    }
    /**
     * @return $this
     */
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?string $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    public function build(): Location {
        return new LocationModel(
            $this->country,
            $this->state
        );
    }
    
    public static function of(): LocationBuilder
    {
        return new self();
    }
}