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

    public const FIELD_PATH = 'path';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>removeProperty</code> on custom objects</p>
     *

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value path to the property that was removed</p>
     *

     * @return null|string
     */
    public function getPath();

    /**

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $path
     */
    public function setPath(?string $path): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;
}
