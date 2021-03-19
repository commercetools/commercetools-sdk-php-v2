<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetLocaleChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setLocale</code> on reviews</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * <p>A locale of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>.</p>
     *
     * @return null|string
     */
    public function getPreviousValue();

    /**
     * <p>A locale of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>.</p>
     *
     * @return null|string
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void;

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void;
}
