<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdateFailResult extends VariantBulkUpdateResult
{
    public const FIELD_ERRORS = 'errors';

    /**
     * <p>Errors that caused the update to fail for this Variant.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;
}
