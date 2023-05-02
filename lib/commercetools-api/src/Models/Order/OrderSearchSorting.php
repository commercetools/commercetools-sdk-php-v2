<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchSorting extends JsonObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ORDER = 'order';
    public const FIELD_MODE = 'mode';
    public const FIELD_FILTER = 'filter';

    /**

     * @return null|string
     */
    public function getField();

    /**

     * @return null|string
     */
    public function getLanguage();

    /**

     * @return null|string
     */
    public function getOrder();

    /**

     * @return null|string
     */
    public function getMode();

    /**

     * @return null|OrderSearchQueryExpression
     */
    public function getFilter();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $order
     */
    public function setOrder(?string $order): void;

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void;

    /**
     * @param ?OrderSearchQueryExpression $filter
     */
    public function setFilter(?OrderSearchQueryExpression $filter): void;
}
