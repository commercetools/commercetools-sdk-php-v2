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
 * @implements Builder<ExtensionCircularDependencyError>
 */
final class ExtensionCircularDependencyErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;Circular dependency detected: [3fa85f64-5717-4562-b3fc-2c963f66afa6, 5e0e1e0b-1f4b-4b8b-9c1a-2d3f4a5b6c7d, 3fa85f64-5717-4562-b3fc-2c963f66afa6]&quot;</code></p>
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


    public function build(): ExtensionCircularDependencyError
    {
        return new ExtensionCircularDependencyErrorModel(
            $this->message
        );
    }

    public static function of(): ExtensionCircularDependencyErrorBuilder
    {
        return new self();
    }
}
