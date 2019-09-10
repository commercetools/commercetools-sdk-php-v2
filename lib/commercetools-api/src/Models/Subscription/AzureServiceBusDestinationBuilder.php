<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AzureServiceBusDestination>
 */
final class AzureServiceBusDestinationBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $connectionString;

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
     * @return string|null
     */
    final public function getConnectionString()
    {
       return $this->connectionString;
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
    final public function withConnectionString(?string $connectionString)
    {
        $this->connectionString = $connectionString;
        
        return $this;
    }
    
    public function build(): AzureServiceBusDestination {
        return new AzureServiceBusDestinationModel(
            $this->type,
            $this->connectionString
        );
    }
    
    public static function of(): AzureServiceBusDestinationBuilder
    {
        return new self();
    }
}