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

interface GraphQLExtensionBadResponseError extends GraphQLErrorObject
{
    public const FIELD_LOCALIZED_MESSAGE = 'localizedMessage';
    public const FIELD_EXTENSION_EXTRA_INFO = 'extensionExtraInfo';
    public const FIELD_EXTENSION_ERRORS = 'extensionErrors';
    public const FIELD_EXTENSION_BODY = 'extensionBody';
    public const FIELD_EXTENSION_STATUS_CODE = 'extensionStatusCode';
    public const FIELD_EXTENSION_ID = 'extensionId';
    public const FIELD_EXTENSION_KEY = 'extensionKey';

    /**

     * @return null|string
     */
    public function getCode();

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
     * <p>The response body returned by the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionBody();

    /**
     * <p>Http status code returned by the Extension.</p>
     *

     * @return null|int
     */
    public function getExtensionStatusCode();

    /**
     * <p>Unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionId();

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionKey();

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

    /**
     * @param ?string $extensionBody
     */
    public function setExtensionBody(?string $extensionBody): void;

    /**
     * @param ?int $extensionStatusCode
     */
    public function setExtensionStatusCode(?int $extensionStatusCode): void;

    /**
     * @param ?string $extensionId
     */
    public function setExtensionId(?string $extensionId): void;

    /**
     * @param ?string $extensionKey
     */
    public function setExtensionKey(?string $extensionKey): void;
}
