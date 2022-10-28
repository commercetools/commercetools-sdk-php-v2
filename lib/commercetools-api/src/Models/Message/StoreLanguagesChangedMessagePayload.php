<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreLanguagesChangedMessagePayload extends MessagePayload
{
    public const FIELD_ADDED_LANGUAGES = 'addedLanguages';
    public const FIELD_REMOVED_LANGUAGES = 'removedLanguages';

    /**
     * <p><a href="ctp:api:type:Locale">Locales</a> added to the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetLanguagesAction">Set Languages</a> update action.</p>
     *

     * @return null|array
     */
    public function getAddedLanguages();

    /**
     * <p><a href="ctp:api:type:Locale">Locales</a> removed from the <a href="ctp:api:type:Store">Store</a> during the <a href="ctp:api:type:StoreSetLanguagesAction">Set Languages</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedLanguages();

    /**
     * @param ?array $addedLanguages
     */
    public function setAddedLanguages(?array $addedLanguages): void;

    /**
     * @param ?array $removedLanguages
     */
    public function setRemovedLanguages(?array $removedLanguages): void;
}
