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
 * @implements Builder<DuplicateEnumValuesError>
 */
final class DuplicateEnumValuesErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?array
     */
    private $duplicates;

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
    public function getDuplicates()
    {
        return $this->duplicates;
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
     * @param ?array $duplicates
     * @return $this
     */
    public function withDuplicates(?array $duplicates)
    {
        $this->duplicates = $duplicates;

        return $this;
    }


    public function build(): DuplicateEnumValuesError
    {
        return new DuplicateEnumValuesErrorModel(
            $this->message,
            $this->duplicates
        );
    }

    public static function of(): DuplicateEnumValuesErrorBuilder
    {
        return new self();
    }
}
