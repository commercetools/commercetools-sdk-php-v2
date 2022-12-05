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
 * @implements Builder<LanguageUsedInStoresError>
 */
final class LanguageUsedInStoresErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;Language(s) in use by a store cannot be deleted. Remove them in all the stores of this project first.&quot;</code></p>
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


    public function build(): LanguageUsedInStoresError
    {
        return new LanguageUsedInStoresErrorModel(
            $this->message
        );
    }

    public static function of(): LanguageUsedInStoresErrorBuilder
    {
        return new self();
    }
}
