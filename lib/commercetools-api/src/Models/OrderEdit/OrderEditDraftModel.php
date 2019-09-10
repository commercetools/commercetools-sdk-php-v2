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

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class OrderEditDraftModel extends JsonObjectModel implements OrderEditDraft
{
    
    public function __construct(
        bool $dryRun = null,
        OrderReference $resource = null,
        CustomFieldsDraft $custom = null,
        string $comment = null,
        StagedOrderUpdateActionCollection $stagedActions = null,
        string $key = null
    ) {
        $this->dryRun = $dryRun;
        $this->resource = $resource;
        $this->custom = $custom;
        $this->comment = $comment;
        $this->stagedActions = $stagedActions;
        $this->key = $key;
        
    }

    /**
     * @var ?bool
     */
    protected $dryRun;
    
    /**
     * @var ?OrderReference
     */
    protected $resource;
    
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?string
     */
    protected $comment;
    
    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    protected $stagedActions;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return bool|null
     */
    final public function getDryRun()
    {
       if (is_null($this->dryRun)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(OrderEditDraft::FIELD_DRY_RUN);
           if (is_null($data)) {
               return null;
           }
           $this->dryRun = (bool)$data;
       }
       return $this->dryRun;
    }
    
    /**
     *
     * @return OrderReference|null
     */
    final public function getResource()
    {
       if (is_null($this->resource)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditDraft::FIELD_RESOURCE);
           if (is_null($data)) {
               return null;
           }
           
           $this->resource = OrderReferenceModel::of($data);
       }
       return $this->resource;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getComment()
    {
       if (is_null($this->comment)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditDraft::FIELD_COMMENT);
           if (is_null($data)) {
               return null;
           }
           $this->comment = (string)$data;
       }
       return $this->comment;
    }
    
    /**
     *
     * @return StagedOrderUpdateActionCollection|null
     */
    final public function getStagedActions()
    {
       if (is_null($this->stagedActions)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderEditDraft::FIELD_STAGED_ACTIONS);
           if (is_null($data)) {
               return null;
           }
           $this->stagedActions = StagedOrderUpdateActionCollection::fromArray($data);
       }
       return $this->stagedActions;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setDryRun(?bool $dryRun): void
    {
        $this->dryRun = $dryRun;
    }
    
    final public function setResource(?OrderReference $resource): void
    {
        $this->resource = $resource;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
    
    final public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void
    {
        $this->stagedActions = $stagedActions;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}