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
 * @implements Builder<MessageConfiguration>
 */
final class MessageConfigurationBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;
    
    /**
     * @var ?bool
     */
    protected $enabled;

    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterCreation()
    {
       return $this->deleteDaysAfterCreation;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getEnabled()
    {
       return $this->enabled;
    }
    /**
     * @return $this
     */
    final public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;
        
        return $this;
    }
    
    public function build(): MessageConfiguration {
        return new MessageConfigurationModel(
            $this->deleteDaysAfterCreation,
            $this->enabled
        );
    }
    
    public static function of(): MessageConfigurationBuilder
    {
        return new self();
    }
}