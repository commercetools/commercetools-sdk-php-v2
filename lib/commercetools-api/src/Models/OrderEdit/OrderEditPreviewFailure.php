<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Error\ErrorObjectCollection;

interface OrderEditPreviewFailure extends OrderEditResult
{

    public const FIELD_ERRORS = 'errors';

    /**
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    public function setErrors(?ErrorObjectCollection $errors): void;
}
