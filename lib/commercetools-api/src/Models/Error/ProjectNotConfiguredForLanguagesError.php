<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectNotConfiguredForLanguagesError extends ErrorObject
{
    public const FIELD_LANGUAGES = 'languages';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The project is not configured for given languages.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Languages configured for the Store.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;
}
