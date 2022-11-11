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
 * @implements Builder<SearchExecutionFailureError>
 */
final class SearchExecutionFailureErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;Something went wrong during the search query execution. In most case this happens due to usage of non-existing fields and custom product attributes. Please verify all filters and facets in your search query and make sure that all paths are correct.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
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


    public function build(): SearchExecutionFailureError
    {
        return new SearchExecutionFailureErrorModel(
            $this->message
        );
    }

    public static function of(): SearchExecutionFailureErrorBuilder
    {
        return new self();
    }
}
