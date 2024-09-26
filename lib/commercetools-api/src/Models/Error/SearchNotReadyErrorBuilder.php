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
 * @implements Builder<SearchNotReadyError>
 */
final class SearchNotReadyErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>$Search is not ready. Check the indexing-status endpoint and that the feature has been activated in the project settings.</code></p>
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


    public function build(): SearchNotReadyError
    {
        return new SearchNotReadyErrorModel(
            $this->message
        );
    }

    public static function of(): SearchNotReadyErrorBuilder
    {
        return new self();
    }
}
