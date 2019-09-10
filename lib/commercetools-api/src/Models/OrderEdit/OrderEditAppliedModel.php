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

use DateTimeImmutable;
use DateTimeImmutableModel;

final class OrderEditAppliedModel extends JsonObjectModel implements OrderEditApplied
{
    const DISCRIMINATOR_VALUE = 'Applied';
    public function __construct(
        string $type = null,
        OrderExcerpt $excerptAfterEdit = null,
        OrderExcerpt $excerptBeforeEdit = null,
        DateTimeImmutable $appliedAt = null
    ) {
        $this->type = $type;
        $this->excerptAfterEdit = $excerptAfterEdit;
        $this->excerptBeforeEdit = $excerptBeforeEdit;
        $this->appliedAt = $appliedAt;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?OrderExcerpt
     */
    protected $excerptAfterEdit;
    
    /**
     * @var ?OrderExcerpt
     */
    protected $excerptBeforeEdit;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $appliedAt;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditResult::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return OrderExcerpt|null
     */
    final public function getExcerptAfterEdit()
    {
       if (is_null($this->excerptAfterEdit)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditApplied::FIELD_EXCERPT_AFTER_EDIT);
           if (is_null($data)) {
               return null;
           }
           
           $this->excerptAfterEdit = OrderExcerptModel::of($data);
       }
       return $this->excerptAfterEdit;
    }
    
    /**
     *
     * @return OrderExcerpt|null
     */
    final public function getExcerptBeforeEdit()
    {
       if (is_null($this->excerptBeforeEdit)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditApplied::FIELD_EXCERPT_BEFORE_EDIT);
           if (is_null($data)) {
               return null;
           }
           
           $this->excerptBeforeEdit = OrderExcerptModel::of($data);
       }
       return $this->excerptBeforeEdit;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getAppliedAt()
    {
       if (is_null($this->appliedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditApplied::FIELD_APPLIED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->appliedAt = $data;
       }
       return $this->appliedAt;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit): void
    {
        $this->excerptAfterEdit = $excerptAfterEdit;
    }
    
    final public function setExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit): void
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;
    }
    
    final public function setAppliedAt(?DateTimeImmutable $appliedAt): void
    {
        $this->appliedAt = $appliedAt;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[OrderEditApplied::FIELD_APPLIED_AT]) && $data[OrderEditApplied::FIELD_APPLIED_AT] instanceof \DateTimeImmutable) {
           $data[OrderEditApplied::FIELD_APPLIED_AT] = $data[OrderEditApplied::FIELD_APPLIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}