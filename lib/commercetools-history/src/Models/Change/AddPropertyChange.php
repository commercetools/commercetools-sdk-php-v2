<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddPropertyChange extends Change
{

    public const FIELD_PATH = 'path';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addProperty</code> on custom objects</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value path to the property that was added</p>
     *
     * @return null|string
     */
    public function getPath();

    /**
     * @return null|mixed
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $path
     */
    public function setPath(?string $path): void;

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void;
}
