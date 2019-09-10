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
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceBuilder;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderEdit>
 */
final class OrderEditBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedByBuilder|CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedByBuilder|LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?OrderEditResultBuilder|OrderEditResult
     */
    protected $result;
    
    /**
     * @var ?OrderReferenceBuilder|OrderReference
     */
    protected $resource;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
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
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       return ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy);
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       return ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy);
    }
    
    /**
     *
     * @return OrderEditResult|null
     */
    final public function getResult()
    {
       return ($this->result instanceof OrderEditResultBuilder ? $this->result->build() : $this->result);
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
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
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
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResult(?OrderEditResult $result)
    {
        $this->result = $result;
        
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
    final public function withCustom(?CustomFields $custom)
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
    final public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResultBuilder(?OrderEditResultBuilder $result)
    {
        $this->result = $result;
        
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
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    public function build(): OrderEdit {
        return new OrderEditModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->result instanceof OrderEditResultBuilder ? $this->result->build() : $this->result),
            ($this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->comment,
            $this->stagedActions,
            $this->key
        );
    }
    
    public static function of(): OrderEditBuilder
    {
        return new self();
    }
}