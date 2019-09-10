<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\ReferenceCollection;
use DateTimeImmutable;

interface ProductDiscount extends LoggedResource
{
    
    const FIELD_NAME = 'name';
    const FIELD_KEY = 'key';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_VALUE = 'value';
    const FIELD_PREDICATE = 'predicate';
    const FIELD_SORT_ORDER = 'sortOrder';
    const FIELD_IS_ACTIVE = 'isActive';
    const FIELD_REFERENCES = 'references';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return ProductDiscountValue|null
     */
    public function getValue();
    
    /**
     *
     * @return string|null
     */
    public function getPredicate();
    
    /**
     *
     * @return string|null
     */
    public function getSortOrder();
    
    /**
     *
     * @return bool|null
     */
    public function getIsActive();
    
    /**
     *
     * @return ReferenceCollection|null
     */
    public function getReferences();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidFrom();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidUntil();
    public function setName(?LocalizedString $name): void;
    
    public function setKey(?string $key): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setValue(?ProductDiscountValue $value): void;
    
    public function setPredicate(?string $predicate): void;
    
    public function setSortOrder(?string $sortOrder): void;
    
    public function setIsActive(?bool $isActive): void;
    
    public function setReferences(?ReferenceCollection $references): void;
    
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
    
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}