<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreLanguagesChangedMessagePayloadModel extends JsonObjectModel implements StoreLanguagesChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreLanguagesChanged';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?array
     */
    protected $addedLanguages;

    /**

     * @var ?array
     */
    protected $removedLanguages;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $addedLanguages = null,
        ?array $removedLanguages = null
    ) {
        $this->addedLanguages = $addedLanguages;
        $this->removedLanguages = $removedLanguages;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Locale">Locales</a> added to the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetLanguagesAction">Set Languages</a> update action.</p>
     *

     * @return null|array
     */
    public function getAddedLanguages()
    {
        if (is_null($this->addedLanguages)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ADDED_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->addedLanguages = $data;
        }

        return $this->addedLanguages;
    }

    /**
     * <p><a href="ctp:api:type:Locale">Locales</a> removed from the <a href="ctp:api:type:Store">Store</a> during the <a href="ctp:api:type:StoreSetLanguagesAction">Set Languages</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedLanguages()
    {
        if (is_null($this->removedLanguages)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_REMOVED_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->removedLanguages = $data;
        }

        return $this->removedLanguages;
    }


    /**
     * @param ?array $addedLanguages
     */
    public function setAddedLanguages(?array $addedLanguages): void
    {
        $this->addedLanguages = $addedLanguages;
    }

    /**
     * @param ?array $removedLanguages
     */
    public function setRemovedLanguages(?array $removedLanguages): void
    {
        $this->removedLanguages = $removedLanguages;
    }
}
