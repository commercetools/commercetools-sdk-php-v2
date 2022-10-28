<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreLanguagesChangedMessagePayload>
 */
final class StoreLanguagesChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $addedLanguages;

    /**

     * @var ?array
     */
    private $removedLanguages;

    /**
     * <p><a href="ctp:api:type:Locale">Locales</a> added to the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetLanguagesAction">Set Languages</a> update action.</p>
     *

     * @return null|array
     */
    public function getAddedLanguages()
    {
        return $this->addedLanguages;
    }

    /**
     * <p><a href="ctp:api:type:Locale">Locales</a> removed from the <a href="ctp:api:type:Store">Store</a> during the <a href="ctp:api:type:StoreSetLanguagesAction">Set Languages</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedLanguages()
    {
        return $this->removedLanguages;
    }

    /**
     * @param ?array $addedLanguages
     * @return $this
     */
    public function withAddedLanguages(?array $addedLanguages)
    {
        $this->addedLanguages = $addedLanguages;

        return $this;
    }

    /**
     * @param ?array $removedLanguages
     * @return $this
     */
    public function withRemovedLanguages(?array $removedLanguages)
    {
        $this->removedLanguages = $removedLanguages;

        return $this;
    }


    public function build(): StoreLanguagesChangedMessagePayload
    {
        return new StoreLanguagesChangedMessagePayloadModel(
            $this->addedLanguages,
            $this->removedLanguages
        );
    }

    public static function of(): StoreLanguagesChangedMessagePayloadBuilder
    {
        return new self();
    }
}
