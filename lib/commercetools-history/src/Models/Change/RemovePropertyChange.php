<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RemovePropertyChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_PATH = 'path';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * <p>Path to the property that was removed.</p>
     *

     * @return null|string
     */
    public function getPath();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;

    /**
     * @param ?string $path
     */
    public function setPath(?string $path): void;
}
