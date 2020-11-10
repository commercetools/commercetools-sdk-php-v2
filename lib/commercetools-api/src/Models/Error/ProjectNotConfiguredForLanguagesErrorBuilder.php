<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectNotConfiguredForLanguagesError>
 */
final class ProjectNotConfiguredForLanguagesErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?array
     */
    private $languages;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?array $languages
     * @return $this
     */
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

        return $this;
    }


    public function build(): ProjectNotConfiguredForLanguagesError
    {
        return new ProjectNotConfiguredForLanguagesErrorModel(
            $this->message,
            $this->languages
        );
    }

    public static function of(): ProjectNotConfiguredForLanguagesErrorBuilder
    {
        return new self();
    }
}
