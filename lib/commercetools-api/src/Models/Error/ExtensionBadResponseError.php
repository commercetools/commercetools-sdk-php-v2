<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionBadResponseError extends ErrorObject
{
    public const FIELD_LOCALIZED_MESSAGE = 'localizedMessage';
    public const FIELD_EXTENSION_EXTRA_INFO = 'extensionExtraInfo';
    public const FIELD_ERROR_BY_EXTENSION = 'errorByExtension';

    /**
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getLocalizedMessage();

    /**
     * @return null|mixed
     */
    public function getExtensionExtraInfo();

    /**
     * @return null|ErrorByExtension
     */
    public function getErrorByExtension();

    /**
     * @param ?LocalizedString $localizedMessage
     */
    public function setLocalizedMessage(?LocalizedString $localizedMessage): void;

    /**
     * @param ?JsonObject $extensionExtraInfo
     */
    public function setExtensionExtraInfo(?JsonObject $extensionExtraInfo): void;

    /**
     * @param ?ErrorByExtension $errorByExtension
     */
    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void;
}
