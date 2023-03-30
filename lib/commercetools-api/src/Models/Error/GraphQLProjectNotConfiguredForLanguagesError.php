<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLProjectNotConfiguredForLanguagesError extends GraphQLErrorObject
{
    public const FIELD_LANGUAGES = 'languages';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Languages configured for the Store.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;
}
