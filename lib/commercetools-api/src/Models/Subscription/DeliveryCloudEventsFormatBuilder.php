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
 * @implements Builder<DeliveryCloudEventsFormat>
 */
final class DeliveryCloudEventsFormatBuilder implements Builder
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
    protected $cloudEventsVersion;

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
    final public function getCloudEventsVersion()
    {
       return $this->cloudEventsVersion;
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
    final public function withCloudEventsVersion(?string $cloudEventsVersion)
    {
        $this->cloudEventsVersion = $cloudEventsVersion;
        
        return $this;
    }
    
    public function build(): DeliveryCloudEventsFormat {
        return new DeliveryCloudEventsFormatModel(
            $this->type,
            $this->cloudEventsVersion
        );
    }
    
    public static function of(): DeliveryCloudEventsFormatBuilder
    {
        return new self();
    }
}