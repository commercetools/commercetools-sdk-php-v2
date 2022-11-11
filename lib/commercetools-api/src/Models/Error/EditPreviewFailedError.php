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

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Error while applying staged actions. ShippingMethods could not be determined.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>State of the OrderEdit where the <code>stagedActions</code> cannot be applied to the Order.</p>
     *

     * @return null|OrderEditPreviewFailure
     */
    public function getResult();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?OrderEditPreviewFailure $result
     */
    public function setResult(?OrderEditPreviewFailure $result): void;
}
