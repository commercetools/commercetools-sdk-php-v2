<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeAssetOrderAction extends Action
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|LocalizedStringCollection
     */
    public function getPreviousValue();

    /**
     * @return null|LocalizedStringCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?LocalizedStringCollection $previousValue
     */
    public function setPreviousValue(?LocalizedStringCollection $previousValue): void;

    /**
     * @param ?LocalizedStringCollection $nextValue
     */
    public function setNextValue(?LocalizedStringCollection $nextValue): void;
}
