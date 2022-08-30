<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreSetLanguagesActionModel extends JsonObjectModel implements StoreSetLanguagesAction
{
    public const DISCRIMINATOR_VALUE = 'setLanguages';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $languages;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $languages = null,
        ?string $action = null
    ) {
        $this->languages = $languages;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.
     * Any attempt to use languages other than the ones defined in the <a href="ctp:api:type:Project">Project</a> will fail with a <a href="ctp:api:type:ProjectNotConfiguredForLanguagesError">ProjectNotConfiguredForLanguages</a> error.</p>
     *
     *
     * @return null|array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->languages = $data;
        }

        return $this->languages;
    }


    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }
}
