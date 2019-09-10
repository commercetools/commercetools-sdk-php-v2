<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderEditApplied extends OrderEditResult
{
    
    const FIELD_APPLIED_AT = 'appliedAt';
    const FIELD_EXCERPT_BEFORE_EDIT = 'excerptBeforeEdit';
    const FIELD_EXCERPT_AFTER_EDIT = 'excerptAfterEdit';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getAppliedAt();
    
    /**
     *
     * @return OrderExcerpt|null
     */
    public function getExcerptBeforeEdit();
    
    /**
     *
     * @return OrderExcerpt|null
     */
    public function getExcerptAfterEdit();
    public function setAppliedAt(?DateTimeImmutable $appliedAt): void;
    
    public function setExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit): void;
    
    public function setExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit): void;
}