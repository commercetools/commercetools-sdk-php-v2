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
 * @implements Builder<PayloadNotIncluded>
 */
final class PayloadNotIncludedBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $reason;
    
    /**
     * @var ?string
     */
    protected $payloadType;

    /**
     *
     * @return string|null
     */
    final public function getReason()
    {
       return $this->reason;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPayloadType()
    {
       return $this->payloadType;
    }
    /**
     * @return $this
     */
    final public function withReason(?string $reason)
    {
        $this->reason = $reason;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPayloadType(?string $payloadType)
    {
        $this->payloadType = $payloadType;
        
        return $this;
    }
    
    public function build(): PayloadNotIncluded {
        return new PayloadNotIncludedModel(
            $this->reason,
            $this->payloadType
        );
    }
    
    public static function of(): PayloadNotIncludedBuilder
    {
        return new self();
    }
}