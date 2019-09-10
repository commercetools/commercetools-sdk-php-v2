<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderEditUpdateModel extends JsonObjectModel implements OrderEditUpdate
{
    
    public function __construct(
        bool $dryRun = null,
        OrderEditUpdateActionCollection $actions = null,
        int $version = null
    ) {
        $this->dryRun = $dryRun;
        $this->actions = $actions;
        $this->version = $version;
        
    }

    /**
     * @var ?bool
     */
    protected $dryRun;
    
    /**
     * @var ?OrderEditUpdateActionCollection
     */
    protected $actions;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return bool|null
     */
    final public function getDryRun()
    {
       if (is_null($this->dryRun)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(OrderEditUpdate::FIELD_DRY_RUN);
           if (is_null($data)) {
               return null;
           }
           $this->dryRun = (bool)$data;
       }
       return $this->dryRun;
    }
    
    /**
     *
     * @return OrderEditUpdateActionCollection|null
     */
    final public function getActions()
    {
       if (is_null($this->actions)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderEditUpdate::FIELD_ACTIONS);
           if (is_null($data)) {
               return null;
           }
           $this->actions = OrderEditUpdateActionCollection::fromArray($data);
       }
       return $this->actions;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(OrderEditUpdate::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    final public function setDryRun(?bool $dryRun): void
    {
        $this->dryRun = $dryRun;
    }
    
    final public function setActions(?OrderEditUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
}