<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProjectChangeCurrenciesActionModel extends JsonObjectModel implements ProjectChangeCurrenciesAction
{
    const DISCRIMINATOR_VALUE = 'changeCurrencies';
    public function __construct(
        string $action = null,
        array $currencies = null
    ) {
        $this->action = $action;
        $this->currencies = $currencies;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $currencies;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getCurrencies()
    {
       if (is_null($this->currencies)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ProjectChangeCurrenciesAction::FIELD_CURRENCIES);
           if (is_null($data)) {
               return null;
           }
           $this->currencies = $data;
       }
       return $this->currencies;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCurrencies(?array $currencies): void
    {
        $this->currencies = $currencies;
    }
    
}