<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ExtensionSetTimeoutInMsActionModel extends JsonObjectModel implements ExtensionSetTimeoutInMsAction
{
    const DISCRIMINATOR_VALUE = 'setTimeoutInMs';
    public function __construct(
        string $action = null,
        int $timeoutInMs = null
    ) {
        $this->action = $action;
        $this->timeoutInMs = $timeoutInMs;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $timeoutInMs;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExtensionUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getTimeoutInMs()
    {
       if (is_null($this->timeoutInMs)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ExtensionSetTimeoutInMsAction::FIELD_TIMEOUT_IN_MS);
           if (is_null($data)) {
               return null;
           }
           $this->timeoutInMs = (int)$data;
       }
       return $this->timeoutInMs;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }
    
}