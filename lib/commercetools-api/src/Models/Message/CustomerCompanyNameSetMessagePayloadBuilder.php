<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerCompanyNameSetMessagePayload>
 */
final class CustomerCompanyNameSetMessagePayloadBuilder implements Builder
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
    protected $companyName;

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
    final public function getCompanyName()
    {
       return $this->companyName;
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
    final public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;
        
        return $this;
    }
    
    public function build(): CustomerCompanyNameSetMessagePayload {
        return new CustomerCompanyNameSetMessagePayloadModel(
            $this->type,
            $this->companyName
        );
    }
    
    public static function of(): CustomerCompanyNameSetMessagePayloadBuilder
    {
        return new self();
    }
}