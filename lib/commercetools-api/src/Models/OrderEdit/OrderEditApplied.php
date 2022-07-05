<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderEditApplied extends OrderEditResult
{
    public const FIELD_APPLIED_AT = 'appliedAt';
    public const FIELD_EXCERPT_BEFORE_EDIT = 'excerptBeforeEdit';
    public const FIELD_EXCERPT_AFTER_EDIT = 'excerptAfterEdit';

    /**

     * @return null|DateTimeImmutable
     */
    public function getAppliedAt();

    /**

     * @return null|OrderExcerpt
     */
    public function getExcerptBeforeEdit();

    /**

     * @return null|OrderExcerpt
     */
    public function getExcerptAfterEdit();

    /**
     * @param ?DateTimeImmutable $appliedAt
     */
    public function setAppliedAt(?DateTimeImmutable $appliedAt): void;

    /**
     * @param ?OrderExcerpt $excerptBeforeEdit
     */
    public function setExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit): void;

    /**
     * @param ?OrderExcerpt $excerptAfterEdit
     */
    public function setExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit): void;
}
