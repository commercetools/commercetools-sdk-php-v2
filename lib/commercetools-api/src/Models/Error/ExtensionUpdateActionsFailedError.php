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
    public const FIELD_EXTENSION_ERRORS = 'extensionErrors';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The extension returned update actions that could not be executed.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>User-defined localized description of the error.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedMessage();

    /**
     * <p>Any information that should be returned to the API caller.</p>
     *

     * @return null|mixed
     */
    public function getExtensionExtraInfo();

    /**
     * <p>Additional errors related to the API Extension.</p>
     *

     * @return null|ExtensionErrorCollection
     */
    public function getExtensionErrors();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?LocalizedString $localizedMessage
     */
    public function setLocalizedMessage(?LocalizedString $localizedMessage): void;

    /**
     * @param ?JsonObject $extensionExtraInfo
     */
    public function setExtensionExtraInfo(?JsonObject $extensionExtraInfo): void;

    /**
     * @param ?ExtensionErrorCollection $extensionErrors
     */
    public function setExtensionErrors(?ExtensionErrorCollection $extensionErrors): void;
}
