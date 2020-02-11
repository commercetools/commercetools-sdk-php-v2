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

interface ExtensionUpdateActionsFailedError extends ErrorObject
{
    public const FIELD_LOCALIZED_MESSAGE = 'localizedMessage';
    public const FIELD_EXTENSION_EXTRA_INFO = 'extensionExtraInfo';
    public const FIELD_ERROR_BY_EXTENSION = 'errorByExtension';

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedMessage();

    /**
     * @return null|JsonObject
     */
    public function getExtensionExtraInfo();

    /**
     * @return null|ErrorByExtension
     */
    public function getErrorByExtension();

    public function setLocalizedMessage(?LocalizedString $localizedMessage): void;

    public function setExtensionExtraInfo(?JsonObject $extensionExtraInfo): void;

    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void;
}
