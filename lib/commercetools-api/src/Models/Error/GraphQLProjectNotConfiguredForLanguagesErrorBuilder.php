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
 * @implements Builder<GraphQLProjectNotConfiguredForLanguagesError>
 */
final class GraphQLProjectNotConfiguredForLanguagesErrorBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $languages;

    /**
     * <p>Languages configured for the Store.</p>
     *

     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
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


    public function build(): GraphQLProjectNotConfiguredForLanguagesError
    {
        return new GraphQLProjectNotConfiguredForLanguagesErrorModel(
            $this->languages
        );
    }

    public static function of(): GraphQLProjectNotConfiguredForLanguagesErrorBuilder
    {
        return new self();
    }
}
