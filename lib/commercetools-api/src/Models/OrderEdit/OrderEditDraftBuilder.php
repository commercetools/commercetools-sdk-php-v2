<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<OrderEditDraft>
 */
final class OrderEditDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?bool
     */
    protected $dryRun;
    
    /**
     * @var ?OrderReferenceBuilder|OrderReference
     */
    protected $resource;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
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
       return $this->dryRun;
    }
    
    /**
     *
     * @return OrderReference|null
     */
    final public function getResource()
    {
       return ($this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource);
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getComment()
    {
       return $this->comment;
    }
    
    /**
     *
     * @return StagedOrderUpdateActionCollection|null
     */
    final public function getStagedActions()
    {
       return $this->stagedActions;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    /**
     * @return $this
     */
    final public function withDryRun(?bool $dryRun)
    {
        $this->dryRun = $dryRun;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResource(?OrderReference $resource)
    {
        $this->resource = $resource;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withComment(?string $comment)
    {
        $this->comment = $comment;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStagedActions(?StagedOrderUpdateActionCollection $stagedActions)
    {
        $this->stagedActions = $stagedActions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withResourceBuilder(?OrderReferenceBuilder $resource)
    {
        $this->resource = $resource;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    public function build(): OrderEditDraft {
        return new OrderEditDraftModel(
            $this->dryRun,
            ($this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            $this->comment,
            $this->stagedActions,
            $this->key
        );
    }
    
    public static function of(): OrderEditDraftBuilder
    {
        return new self();
    }
}