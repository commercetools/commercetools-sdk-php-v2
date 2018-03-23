<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;

interface ProductDiscountDraft extends JsonObject {
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_VALUE = 'value';
    const FIELD_PREDICATE = 'predicate';
    const FIELD_SORT_ORDER = 'sortOrder';
    const FIELD_IS_ACTIVE = 'isActive';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return ProductDiscountValue
     */
    public function getValue();

    /**
     * @return string
     */
    public function getPredicate();

    /**
     * @return string
     */
    public function getSortOrder();

    /**
     * @return mixed
     */
    public function getIsActive();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param ProductDiscountValue $value
     * @return $this
     */
    public function setValue(ProductDiscountValue $value);

    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate);

    /**
     * @param string $sortOrder
     * @return $this
     */
    public function setSortOrder(string $sortOrder);

    /**
     * @param mixed $isActive
     * @return $this
     */
    public function setIsActive($isActive);

    /**
     * @param \DateTimeImmutable $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom);

    /**
     * @param \DateTimeImmutable $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil);

}
