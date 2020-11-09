<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailure;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface EditPreviewFailedError extends ErrorObject
{
    public const FIELD_RESULT = 'result';

    /**
     * @return null|OrderEditPreviewFailure
     */
    public function getResult();

    /**
     * @param ?OrderEditPreviewFailure $result
     */
    public function setResult(?OrderEditPreviewFailure $result): void;
}
